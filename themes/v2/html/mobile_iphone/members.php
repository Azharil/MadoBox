<?php
	
	$this->load_template('mobile_iphone/header.php');
	
?>
			<div id="listpage">
				<div id="listfilter">
					<a href="javascript:;" onclick="toggle_listfilter();" id="listfilterchosen"><b><strong><?= $this->lang('iphone_members_menu_'.$D->show) ?> <span>&middot; <?= $D->nums[$D->show] ?></span></strong></b></a>
					<div id="listfilteroptions" style="display:none;">
						<div id="listfilteroptions2">
							<a href="<?= $C->SITE_URL ?>members"><?= $this->lang('iphone_members_menu_following') ?> <span>&middot; <?= $D->nums['following'] ?></span></a>
							<a href="<?= $C->SITE_URL ?>members/show:followers"><?= $this->lang('iphone_members_menu_followers') ?> <span>&middot; <?= $D->nums['followers'] ?></span></a>
							<a href="<?= $C->SITE_URL ?>members/show:everybody" style="<?= $D->show_admins?'':'border-bottom:0px;' ?>"><?= $this->lang('iphone_members_menu_everybody') ?> <span>&middot; <?= $D->nums['everybody'] ?></span></a>
							<?php if($D->show_admins) { ?>
							<a href="<?= $C->SITE_URL ?>members/show:admins" style="border-bottom:0px;"><?= $this->lang('iphone_members_menu_admins') ?> <span>&middot; <?= $D->nums['admins'] ?></span></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php if(  $D->num_results == 0 ) { ?>
					<div class="alert yellow"><?= $this->lang('iphone_members_no_'.$D->show) ?></div>
				<?php } else { ?>
					<div id="prlist">
						<div id="prlist2">
							<div id="prlist3">
								<div id="prlist4">
									<div id="prlist5">
										<div id="prlist6">
											<?= $D->users_html ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if( $D->num_pages > 1 ) { ?>
					<div id="nextback">
						<div id="nextback2">
							<div id="nextback3">
								<?php if( $D->pg > 1 ) { ?>
								<a href="<?= $C->SITE_URL ?>members/show:<?= $D->show ?>/pg:<?= $D->pg-1 ?>" class="nb_back"><?= $this->lang('iphone_paging_back') ?></a>
								<?php } ?>
								<?php if( $D->pg < $D->num_pages ) { ?>
								<a href="<?= $C->SITE_URL ?>members/show:<?= $D->show ?>/pg:<?= $D->pg+1 ?>" class="nb_next"><?= $this->lang('iphone_paging_next') ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>
				<?php } ?>
			</div>
<?php
	
	$this->load_template('mobile_iphone/footer.php');
	
?>