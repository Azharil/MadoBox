<a href="<?= $D->p->permalink ?>"  title="">

<div class='span3 box-quick-link anime-background' style="margin: 0px 0px 10px 8px; background: #AEB6BE; height:210px;">
<img data-original="<?= $C->IMG_URL.'avatars/'.$D->p->post_group->avatar ?>" style="height: auto;
max-width: 100%;
vertical-align: middle;
border: 0;
width: 140px;
-ms-interpolation-mode: bicubic;
height: 180px;" class="lazy">
<div class='content' style="margin-top:0px">(<?= $D->p->parse_text() ?>) <?= htmlspecialchars(str_cut($D->p->post_group->title,19)) ?></div>

                     </a></div>
			
		