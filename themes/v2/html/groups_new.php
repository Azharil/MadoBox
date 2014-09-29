<?php
	
	$this->load_template('header.php');
	
?>
					<div id="invcenter">
						<h2>Tambahkan Anime</h2>	
						<?php if( $D->error ) { ?>
						<?= errorbox($this->lang('newgroup_f_err'), $this->lang($D->errmsg), TRUE, 'margin-top:5px; margin-bottom:4px;') ?>
						<?php } ?>
						<div class="greygrad">
							<div class="greygrad2">
								<div class="greygrad3" style="padding-bottom:0px; padding-top:0px;">
									<form method="post" action="" enctype="multipart/form-data">
										<table id="setform" cellspacing="5" >
											<tr>
												<td width="80" class="setparam">Judul Anime:</td>
												<td><input type="text" class="setinp" name="form_title" value="<?= htmlspecialchars($D->form_title) ?>" maxlength="30" style="width:320px; padding:3px;" /></td>
											</tr>
											<tr>
												<td width="80" class="setparam">URL singkat:</td>
												<td><?= $C->SITE_URL ?><input type="text" name="form_groupname" value="<?= htmlspecialchars($D->form_groupname) ?>" class="setinp" maxlength="30" style="width:120px; padding:3px; margin-left:2px;" /></td>
											</tr>
											
											
													<input type="hidden" name="form_type" value="public"/>
<input type="hidden" name="form_description" value=""/>														
											
											<tr>
												<td></td>
												<td><input type="submit" value="Tambahkan Anime Baru" name="sbm" style="padding:4px; font-weight:bold;" /></td>
											</tr>
										</table>
									</form>
								</div>
							</div>
						</div>
					</div>
<?php
	
	$this->load_template('footer.php');
	
?>