<?php
		
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
		$D->posts_html	= ob_get_contents();
		ob_end_clean();	
	
	$this->load_template('widgetcomment.php');
	
?>