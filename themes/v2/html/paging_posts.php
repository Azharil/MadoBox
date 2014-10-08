<?php if( $D->num_pages > 1 ) { ?> 
</div>

<style>
.pagination {
	margin:0px;

}
</style>
					<div class='pagination' style=" padding-left: 7px;">
					<ul>
								<?php if($D->pg > 1) { ?>
								<li><a href="<?= $D->paging_url ?><?= $D->pg-1 ?>">&lt;&lt;</a></li>
								<?php } ?>
								<!-- <span>...</span> -->
								<?php 
								if($D->pg <= 2) {
									$mn	= 1;
									$mx	= min(5, $D->num_pages);
								}
								elseif($D->pg >= $D->num_pages-2) {
									$mn = $D->num_pages - min(5, $D->num_pages) + 1;
									$mx = $D->num_pages;
								}
								else {
									$mn = $D->pg-2;
									$mx = $D->pg+2;
								}
								for($i=$mn; $i<=$mx; $i++) { ?>
								<li><a href="<?= $D->paging_url ?><?= $i ?>" class="<?= $i==$D->pg?'onpage':'' ?>"><b><?= $i ?></b></a></li>
								<?php } ?>
								<!-- <span>...</span> -->
								<?php if($D->pg < $D->num_pages-0) { ?>
								<li><a href="<?= $D->paging_url ?><?= $D->pg+1 ?>" >&gt;&gt;</a></li>
								<?php } ?>

								</ul>
							</div>
						
						<div class="klear"></div>
<?php } ?>