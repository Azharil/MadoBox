                                                                						
									<?php if( $D->g->is_private ) { ?>
									<?php } else { ?>
								
									<?php } ?>
									
											<a href="<?= userlink($D->g->groupname) ?>" class="slimuser" title="">
						
							<div class="leaders_icon" style="background: url('<?= $C->CDN_URL ?>/i/avatars/<?= $D->g->avatar ?>') no-repeat -20px -5px;">
								<span>✓</span>
								<p><?= $D->g->num_posts ?></p>
										</div>
										<div class="under_leaders_icon">
									<?= htmlspecialchars(str_cut($D->g->title,20)) ?>
									</div>
										
								
								
								
</a>
                            
                            