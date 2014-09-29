<?php
	
	$this->load_template('header.php');
	
?>
					<div id="home_content" class="publicindex" style="width:670px; margin-bottom:10px;">
						<div id="indexintro">
							<div id="indexintro2">
								<h1><?= $D->intro_ttl ?></h1>
								<p><?= $D->intro_txt ?></p>
								<a href="<?= $C->SITE_URL ?>signup" id="ïntrobtn"><b><?= $this->lang('os_welcome_btn') ?></b></a>
							</div>
						</div>
						
						<div class="ttl" style="margin-bottom:8px;">
							<div class="ttl2">
								<h3><?= $this->lang('dbrd_poststitle_everybody', array('#USERNAME#'=>'', '#COMPANY#'=>htmlspecialchars($C->COMPANY))) ?></h3>
								<div id="postfilter">
									<a href="javascript:;" onclick="dropdiv_open('postfilteroptions');" id="postfilterselected" onfocus="this.blur();"><span><?= $this->lang('posts_filter_'.$D->filter) ?></span></a>
									<div id="postfilteroptions" style="display:none;">
										<a href="<?= $C->SITE_URL ?>home/filter:all"><?= $this->lang('posts_filter_all') ?></a>
										<a href="<?= $C->SITE_URL ?>home/filter:links"><?= $this->lang('posts_filter_links') ?></a>
										<a href="<?= $C->SITE_URL ?>home/filter:images"><?= $this->lang('posts_filter_images') ?></a>
										<a href="<?= $C->SITE_URL ?>home/filter:videos"><?= $this->lang('posts_filter_videos') ?></a>
										<a href="<?= $C->SITE_URL ?>home/filter:files" style="border-bottom:0px;"><?= $this->lang('posts_filter_files') ?></a>
									</div>
									<span><?= $this->lang('posts_filter_ttl') ?></span>
								</div>		
							</div>
						</div>
						
						
						
						
						
						
						<!-- new thing -->
					<script type="text/javascript">
					var last_post_id = 15;
						var about_user_id = 1; //edit this 
						var about_tab = "user_updates_posts"; //edit this
						var group_id = 0;

						
						if( d.addEventListener ) {
							d.addEventListener("load", new_activity_check, false);
							w.addEventListener("load", new_activity_check, false);
						}
						else if( d.attachEvent ) {
							d.attachEvent("onload", new_activity_check);
							w.attachEvent("onload", new_activity_check);
						}
					</script>
					<!-- new thing -->
					
					<div id="userposts">
						<!-- new -->
						<div id="newactivity">
							<a id="loadnewactivity" href="javascript:;" onclick="new_activity_show();"></a>
							<img id="loading_posts" src="<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/loading_posts.gif" />
						</div>
						<!-- new -->
						
						<div id="posts_html">
							<div id="insertAfter"></div>
							<?= $D->posts_html ?>
						</div>
						
						<!-- new -->
						<?php if( $D->num_results == $C->PAGING_NUM_POSTS ) { ?>
						
						<div id="loadmore">	
							<a href="javascript: void(0);" id="loadmorelink" onclick="load_more_results('posts_html', <?= $D->start_from ?>);">Show more</a> 
							<img id="loadmore-img" src="<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/loading_posts.gif" />
							<a href="javascript: void(0);" id="loadmoretotop" onClick="scroll_to_top();">Top</a>			
						</div>
						
						<?php } ?>
						
					</div>
					</div>
					<div id="home_right" style="width:250px;">
						
						<div id="login">
							<h3><?= $this->lang('os_login_ttl', array('#SITE_TITLE#'=>$C->SITE_TITLE)) ?></h3>
							<div id="loginbox">
								<form method="post" action="<?= $C->SITE_URL ?>signin">
									<small><?= $this->lang('os_login_unm') ?></small>
									<input type="text" name="email" value="" class="loginput" tabindex="1" />
									<small><?= $this->lang('os_login_pwd') ?></small>
									<input type="password" name="password" value="" class="loginput" tabindex="2" />
									<input type="submit" class="loginbtn" value="<?= $this->lang('os_login_btn') ?>" tabindex="4" />
									<label style="clear:none;">
										<input type="checkbox" name="rememberme" value="1" tabindex="3" />
										<span><?= $this->lang('os_login_rem') ?></span>
									</label>
									<div class="klear"></div>
								</form>
								<div id="loginlinks">
									<a href="<?= $C->SITE_URL ?>signup"><?= $this->lang('os_login_reg') ?></a>
									<a href="<?= $C->SITE_URL ?>signin/forgotten"><?= $this->lang('os_login_frg') ?></a>
								</div>
								
								<div id="loginlinks" style="margin-top:5px; margin-bottom:2px; padding-top:5px;">
									<?php if( $D->fb_login_url ) { ?>
										<div style="float:left; margin-right:5px;" title="Facebook Connect">
											<a id="facebookconnect" href="<?= $D->fb_login_url; ?>"></a>
										</div>
									<?php } ?>
									<?php if( isset($C->TWITTER_CONSUMER_KEY,$C->TWITTER_CONSUMER_SECRET) && !empty($C->TWITTER_CONSUMER_KEY) && !empty($C->TWITTER_CONSUMER_SECRET) ) { ?>
										<a id="twitterconnect" href="<?= $C->SITE_URL ?>twitter-connect?backto=<?= $C->SITE_URL ?>signin/get:twitter" title="Twitter Connect" style="margin-top:3px;"><b>Twitter</b></a>
									<?php } ?>
								</div>
							</div>
							<div id="loginftr"></div>
						</div>
						
						<?php if(!$C->PROTECT_OUTSIDE_PAGES){ ?>
						
						<?php if( count($D->last_online) > 0 ) { ?>
						<div class="ttl" style="margin-top:0px; margin-bottom:8px;"><div class="ttl2"><h3><?= $this->lang('dbrd_right_lastonline') ?></h3></div></div>
						<div class="slimusergroup" style="margin-right:-10px; margin-bottom:5px;">
							<?php foreach($D->last_online as $u) { ?>
							<a href="<?= userlink($u['username']) ?>" class="slimuser" title="<?= htmlspecialchars($u['username']) ?>"><img src="<?= $C->IMG_URL ?>avatars/thumbs1/<?= $u['avatar'] ?>" alt="" style="padding:3px;" /></a>
							<?php } ?>
						</div>
						<?php } ?>
						
						<?php if( count($D->post_tags) > 0 ) { ?>
						<div class="ttl" style="margin-top:0px; margin-bottom:8px;"><div class="ttl2"><h3><?= $this->lang('dbrd_right_posttags') ?></h3></div></div>
						<div class="taglist" style="margin-bottom:5px;">
							<?php foreach($D->post_tags as $tmp) { ?>
							<a href="<?= $C->SITE_URL ?>search/posttag:%23<?= $tmp ?>" title="#<?= htmlspecialchars($tmp) ?>"><small>#</small><?= htmlspecialchars(str_cut($tmp,25)) ?></a>
							<?php } ?>
						</div>
						<?php } ?>
						
						<?php } ?>
					</div>
<?php
	
	$this->load_template('footer.php');
	
?>