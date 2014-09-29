<a href="<?= userlink($D->g->groupname) ?>" title="">
<div class='span3 box-quick-link anime-background' style="margin: 0px 0px 0px 8px; background: #AEB6BE; height:210px;">
<img src="<?= $C->CDN_URL ?>/i/avatars/<?= $D->g->avatar ?>" style="height: auto;
max-width: 100%;
vertical-align: middle;
border: 0;
width: 140px;
-ms-interpolation-mode: bicubic;
height: 180px;">
<div class='content has-popover'  data-content='<?= htmlspecialchars(str_cut($D->g->about_me,30)) ?>' data-placement='bottom' data-title='<?=$D->g->title; ?>' style="margin-top:0px"><?= htmlspecialchars(str_cut($D->g->title,20)) ?></div>
<div class='header'>
</div>
</a>
</div>



						

                            