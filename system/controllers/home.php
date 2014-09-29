<?php
	
	if( $this->user->is_logged ) {
		$this->redirect('dashboard');
	}
	
	require($C->INCPATH.'helpers/func_additional.php');
	
	if( isset($_SESSION['TWITTER_CONNECTED']) && $_SESSION['TWITTER_CONNECTED'] && $_SESSION['TWITTER_CONNECTED']->id ) {
		$uid	= intval($_SESSION['TWITTER_CONNECTED']->id);
		$db2->query('SELECT email, password FROM users WHERE twitter_uid<>"" AND twitter_uid="'.$uid.'" LIMIT 1');
		if($tmp = $db2->fetch_object()) {
			if( $this->user->login(stripslashes($tmp->email), stripslashes($tmp->password)) ) {
				$this->redirect($C->SITE_URL.'dashboard');
			}
		}
	}
	
	$this->load_langfile('inside/global.php');
	$this->load_langfile('outside/global.php');
	$this->load_langfile('inside/dashboard.php');
	$this->load_langfile('outside/home.php');
	
	$D->page_title	= $this->lang('os_home_page_title', array('#SITE_TITLE#'=>$C->SITE_TITLE));
	$D->intro_ttl	= $this->lang('os_welcome_ttl', array('#SITE_TITLE#'=>$C->SITE_TITLE));
	$D->intro_txt	= $this->lang('os_welcome_txt', array('#SITE_TITLE#'=>$C->SITE_TITLE));
	if( isset($C->HOME_INTRO_TTL) && !empty($C->HOME_INTRO_TTL) ) {
		$D->page_title	= strip_tags($C->SITE_TITLE.' - '.$C->HOME_INTRO_TTL);
		$D->intro_ttl	= $C->HOME_INTRO_TTL;
	}
	if( isset($C->HOME_INTRO_TXT) && !empty($C->HOME_INTRO_TXT) ) {
		$D->intro_txt	= $C->HOME_INTRO_TXT;
	}
	if( isset($C->FACEBOOK_API_ID, $C->FACEBOOK_API_SECRET) && !empty($C->FACEBOOK_API_ID) && !empty($C->FACEBOOK_API_SECRET) && function_exists('curl_init') && function_exists('json_decode') ){
		require_once( $C->INCPATH.'classes/class_facebook.php');
		$facebook = new Facebook(array(
			'appId'  => $C->FACEBOOK_API_ID,
			'secret' => $C->FACEBOOK_API_SECRET,
		));

		$D->fb_login_url = $facebook->getLoginUrl();
		
	}else{
		$D->fb_login_url = FALSE;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($C->PROTECT_OUTSIDE_PAGES) && !$C->PROTECT_OUTSIDE_PAGES){
	
	

	
	
	
	 $C->PAGING_NUM_POSTS = 15;
	
	
		$filters	= array('all', 'videos', 'images', 'links', 'files');
		$filter	= 'all';
		if( $this->param('filter') && in_array($this->param('filter'), $filters) ) {
			$filter	= $this->param('filter');
		}
		$at_tmp	= array('videos'=>'videoembed', 'images'=>'image', 'links'=>'link', 'files'=>'file');
		
		$not_in_groups	= array();
		$not_in_groups 	= $this->network->get_private_groups_ids();
		$not_in_groups	= count($not_in_groups)>0 ? ('AND p.group_id NOT IN('.implode(', ', $not_in_groups).')') : '';
		
		$without_users = array();
		$without_users = $this->network->get_post_protected_user_ids();
		$without_users = count($without_users)>0 ? (' AND (p.group_id>0 OR p.user_id NOT IN('.implode(', ', $without_users).'))') : '';
		
		if($filter == 'all') {
			$q1	= '';
			$q2	= 'SELECT p.*, "public" AS `type` FROM posts p WHERE p.user_id<>0 AND p.api_id<>2 AND p.api_id<>6 AND p.group_id<>0 '.$not_in_groups.$without_users.' ORDER BY p.id DESC LIMIT 0, '.$C->PAGING_NUM_POSTS;
		}
		else {
			$q1	= '';
			$q2	= 'SELECT p.*, "public" AS `type` FROM posts p, posts_attachments a WHERE p.id=a.post_id AND p.user_id<>0 AND p.api_id<>2 AND p.api_id<>6 '.$not_in_groups.$without_users.' AND a.type="'.$at_tmp[$filter].'" ORDER BY p.id DESC LIMIT 0, '.$C->PAGING_NUM_POSTS;
		}
		
		$D->filter		= $filter;
		$D->num_results	= 0;
		$D->num_pages	= 1;
		$D->pg		= 1;
		$D->posts_html	= '';
		
		$D->num_results	= $C->PAGING_NUM_POSTS; 
		$res	= $db2->query($q2);
		ob_start();
		if($D->num_results>0){
			while($obj = $db2->fetch_object($res)) {
				$D->p	= new post($obj->type, FALSE, $obj);
				if( $D->p->error ) {
					continue;
				}
				if( $this->param('from')=='ajax' && $this->param('onlypost')!="" && $this->param('onlypost')!=$D->p->post_tmp_id ) {
					continue;
				}
				if( $this->param('from')=='ajax' && $this->param('opencomments')!="" && $this->param('opencomments')==$D->p->post_tmp_id ) {
					$D->p->comments_open	= TRUE;
				}
				$D->post_show_slow	= FALSE;
				if( $this->param('from')=='ajax' && isset($_POST['lastpostdate']) && $D->p->post_date>intval($_POST['lastpostdate']) ) {
					$D->post_show_slow	= TRUE;
				}
				$D->parsedpost_attlink_maxlen	= 52;
				$D->parsedpost_attfile_maxlen	= 48;
				if( isset($D->p->post_attached['image']) ) {
					$D->parsedpost_attlink_maxlen	-= 10;
					$D->parsedpost_attfile_maxlen	-= 12;
				}
				if( isset($D->p->post_attached['videoembed']) ) {
					$D->parsedpost_attlink_maxlen	-= 10;
					$D->parsedpost_attfile_maxlen	-= 12;
				}
				
				$D->show_reshared_design = ($D->p->post_resharesnum > 0);
				
				$this->load_template('single_post_anime.php');
			}
			unset($D->p);
			$D->paging_url	= $C->SITE_URL.'home/filter:'.$filter.'/pg:';
			if( $D->num_pages>1 && !$this->param('onlypost') ) {
				$this->load_template('paging_posts.php');
			}
		}else{
			$D->noposts_box_title	= $this->lang('os_noposts_ttl'); 
			
			if($filter == 'all'){ 
				$D->noposts_box_text	= $this->lang('os_noposts_unreg_mgs');
			}else{
				$D->noposts_box_text	= $this->lang('os_noposts_match_mgs');
			}
			
			$this->load_template('noposts_box.php');
		}
		unset($D->p);
		$D->posts_html	= ob_get_contents();
		ob_end_clean();
		
		if( $this->param('from') == 'ajax' )
		{
			echo 'OK:';
			echo $D->posts_html;
			exit;
		}
		
		$D->last_online	= array();
		$D->last_online	= $this->network->get_online_users();
		
		$D->post_tags	= array();
		$D->post_tags	= $this->network->get_recent_posttags();
	}
			$D->num_posts	= intval($db2->fetch_field('SELECT COUNT(id) FROM posts WHERE user_id<>0 AND api_id<>2 AND group_id<>0'));
			$D->num_anime	= intval($db2->fetch_field('SELECT COUNT(id) FROM groups'));

	
	
	
	
	
	
	
	
	
	
	$C->PAGING_NUM_GROUPS = 4;
	
	$tabs		= array('all');
	if( $this->user->is_logged ) {	
		$tabs[] 	= 'fav';
		$tabs[] 	= 'special';	
	}
	$D->tab	= 'all';
	if( $this->param('tab') && in_array($this->param('tab'), $tabs) ) {
		$D->tab	= $this->param('tab');
	}
	$D->i_am_network_admin	= ( $this->user->is_logged && $this->user->info->is_network_admin > 0 );	
	
	$not_in_groups	= array();
	if( !$D->i_am_network_admin ) {
		$not_in_groups 	= array_diff( $this->network->get_private_groups_ids(), $this->user->get_my_private_groups_ids() );
	}
	$not_in_groups	= count($not_in_groups)>0 ? ('AND id NOT IN('.implode(', ', $not_in_groups).')') : '';
	
	$D->num_results	= 0;
	$D->num_pages	= 0;
	$D->pg		= 1;
	$D->groups_html	= '';
	
	$D->orderby	= 'date';
	$sql_orderby	= array(
		'name'	=> 'title ASC, num_followers DESC, num_posts DESC, id DESC',
		'date'	=> 'id DESC',
		'users'	=> 'num_followers DESC, num_posts DESC, id DESC',
		'posts'	=> 'num_posts DESC, num_followers DESC, id DESC',
	);
	if( $this->param('orderby') && isset($sql_orderby[$this->param('orderby')]) ) {
		$D->orderby	= $this->param('orderby');
	}
	
	$selected_groups	= array();
	$group_ids 		= array();
	if( $D->tab == 'all' )
	{
		$D->num_results	= $db2->fetch_field('SELECT COUNT(*) FROM groups WHERE 1 '.$not_in_groups);
		$D->num_pages	= ceil($D->num_results / $C->PAGING_NUM_GROUPS);
		$D->pg	= $this->param('pg') ? intval($this->param('pg')) : 1;
		$D->pg	= min($D->pg, $D->num_pages);
		$D->pg	= max($D->pg, 1);
		$from	=  ($this->user->is_logged)? (($D->pg - 1) * $C->PAGING_NUM_GROUPS) : 0;

		$db2->query('SELECT * FROM groups WHERE 1 '.$not_in_groups.' ORDER BY '.$sql_orderby[$D->orderby].' LIMIT '.$from.', '.$C->PAGING_NUM_GROUPS);
		while($o = $db2->fetch_object()) {
			$selected_groups[] = generate_group_info_obj($o);
			$group_ids[] 	 = $o->id; 
		}
		$D->pg = ($this->user->is_logged)? $D->pg : 1;
	}
	
	
	$D->if_can_leave 	= array();
	$g_admins 			= array();
	if( $this->user->id && count($group_ids)>0 ){
		$db2->query('SELECT * FROM groups_admins WHERE group_id IN('.implode(',', $group_ids).')');
		while($o = $db2->fetch_object() ){
			if( isset($g_admins[$o->group_id]) ){
				if( $o->user_id != $this->user->id ){
					$g_admins[$o->group_id] += 1;
				}
			}else{
				$g_admins[$o->group_id] = ($o->user_id == $this->user->id)? 0 : 1;
			}
		}
		foreach($g_admins as $gid => $num_members){
			// -1 == TRUE, you can leave
			//  1 == FALSE, could not leave
			$D->if_can_leave[$gid] = ($num_members>0)? -1 : 1;
		}
		unset($gmembers);
	}
	
	$D->if_follow_group = array();
	if($this->user->id && count($group_ids)>0){
		$db2->query('SELECT * FROM groups_followed WHERE group_id IN('.implode(',', $group_ids).') AND user_id="'.$this->user->id.'"');
		while($o = $db2->fetch_object()){
			if( isset($D->if_follow_group[$o->group_id]) ){
					continue;
			}
			$D->if_follow_group[$o->group_id] = 1;
		}
	}
	
	if( 0 == $D->num_results ) {
		$arr	= array('#SITE_TITLE#'=>htmlspecialchars($C->OUTSIDE_SITE_TITLE));
		$D->noposts_box_title	= $this->lang('nogroups_box_ttl_'.$D->tab, $arr);
		$D->noposts_box_text	= $this->lang('nogroups_box_txt_'.$D->tab, $arr);
		$D->groups_html	= $this->load_template('noposts_box.php', FALSE);
	}
	else {
		ob_start();
		foreach($selected_groups as $tmp) {
			$D->g	= $tmp;
			$this->load_template('single_group_home.php');
		}
		$D->paging_url	= $C->SITE_URL.'groups/tab:'.$D->tab.'/orderby:'.$D->orderby.'/pg:';
		if( $D->num_pages > 1 ) {
		
		}
		$D->groups_html	= ob_get_contents();
		ob_end_clean();
		unset($tmp, $sdf, $g, $D->g, $D->if_follow_group, $D->if_can_leave);
	}
	
	
	
	//comments_open
	
	$comment	= 'SELECT * FROM posts_comments';
		$D->num_results	= $C->PAGING_NUM_POSTS; 
		$res	= $db2->query($comment);
		ob_start();
		if($D->num_results>0){
			while($obj = $db2->fetch_object($res)) {
				$D->p	= new post($obj, FALSE, $obj);
				if( $D->p->error ) {
					continue;
				}		
				$this->load_template('widget_single_post.php');
			}
		}
		unset($D->p);
		$D->comment_list	= ob_get_contents();
		ob_end_clean();	
	$D->num_members	= intval($db2->fetch_field('SELECT COUNT(id) FROM users WHERE active=1'));
	$this->load_template('home.php');
	
?>