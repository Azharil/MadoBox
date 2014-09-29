<?php
	
	$this->load_template('header.php');
	
?>
<div class='container-fluid '>
<div class='row-fluid  box' id='content-wrapper'>
<div class='span12 '>
<div class='row-fluid'>
	
    <div class='span12'>
        <div class='page-header'>
			<div class="container">
            <h1>
                <i class='icon-filter'></i>
                <span>Genre</span>

            </h1>
        </div>
        </div>
    </div>
</div>

<div class="container">






<div id='wrapper'  style="
    margin-top: -30px; margin-top: -30px;
border-right: 1px solid #dddddd;
border-left: 1px solid #dddddd;
border-bottom: 1px solid #dddddd;
">
<div id='main-nav-bg'></div>
<nav class='' id='main-nav'>
<div class='navigation'>
<div class='search'>
    <form accept-charset="UTF-8" action="search_results.html" method="get" /><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
        <div class='search-wrapper'>
            <input autocomplete="off" class="search-query" id="q" name="q" placeholder="Search..." type="text" value="" />
            <button class="btn btn-link icon-search" name="button" type="submit"></button>
        </div>
    </form>
</div>
<ul class='nav nav-stacked'>
<li class="<?= $D->tab=='action'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:action'>
        <i class='icon-chevron-sign-right'></i>
        <span>Action</span>
    </a>
</li>
<li class="<?= $D->tab=='comedy'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:comedy'>
        <i class='icon-chevron-sign-right'></i>
        <span>Comedy</span>
    </a>
</li>
<li class="<?= $D->tab=='drama'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:drama'>
        <i class='icon-chevron-sign-right'></i>
        <span>Drama</span>
    </a>
</li>
<li class="<?= $D->tab=='ecchi'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:ecchi'>
        <i class='icon-chevron-sign-right'></i>
        <span>Ecchi</span>
    </a>
</li>
<li class="<?= $D->tab=='fanyasy'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:fantasy'>
        <i class='icon-chevron-sign-right'></i>
        <span>Fantasy</span>
    </a>
</li>
<li class="<?= $D->tab=='game'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:game'>
        <i class='icon-chevron-sign-right'></i>
        <span>Game</span>
    </a>
</li>
<li class="<?= $D->tab=='horror'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:horror'>
        <i class='icon-chevron-sign-right'></i>
        <span>Horror</span>
    </a>
</li>
<li class="<?= $D->tab=='magic'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:magic'>
        <i class='icon-chevron-sign-right'></i>
        <span>Magic</span>
    </a>
</li>
<li class="<?= $D->tab=='mystery'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:mystery'>
        <i class='icon-chevron-sign-right'></i>
        <span>Mystery</span>
    </a>
</li>
<li class="<?= $D->tab=='romance'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:romance'>
        <i class='icon-chevron-sign-right'></i>
        <span>Romance</span>
    </a>
</li>
<li class="<?= $D->tab=='school'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:school'>
        <i class='icon-chevron-sign-right'></i>
        <span>School</span>
    </a>
</li>
<li class="<?= $D->tab=='scifi'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:scifi'>
        <i class='icon-chevron-sign-right'></i>
        <span>Sci-Fi</span>
    </a>
</li>
<li class="<?= $D->tab=='shoujo'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:shoujo'>
        <i class='icon-chevron-sign-right'></i>
        <span>Shoujo</span>
    </a>
</li>
<li class="<?= $D->tab=='shonen'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:shonen'>
        <i class='icon-chevron-sign-right'></i>
        <span>Shonen</span>
    </a>
</li>
<li class="<?= $D->tab=='sports'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:sports'>
        <i class='icon-chevron-sign-right'></i>
        <span>Sports</span>
    </a>
</li>
<li class="<?= $D->tab=='supernatural'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:supernatural'>
        <i class='icon-chevron-sign-right'></i>
        <span>Supernatural</span>
    </a>
</li>
<li class="<?= $D->tab=='superpower'?'active':'' ?>">
    <a href='<?= $C->SITE_URL ?>genre/tab:superpower'>
        <i class='icon-chevron-sign-right'></i>
        <span>Superpower</span>
    </a>
</li>
</ul>
</div>
</nav>






<?php if( $this->user->is_logged && $this->user->info->is_network_admin == 1 ) { ?>	
						<h2>
							<div style="float:left">Daftar Anime</div>
							<a href="<?= $C->SITE_URL ?>groups/new" class="newgroupbtn"><b>Tambahkan Anime Baru</b></a>
							<div class="klear"></div>
						</h2>
						<?php } ?>
						<?php if( $this->param('msg')=='deleted' ) { ?>
						<?= okbox($this->lang('groups_msgbox_deleted_ttl'), $this->lang('groups_msgbox_deleted_txt')) ?>
						<?php } ?>	

				
							
						
<section id='content'>
<div class='container-fluid'>
<div class='row-fluid' id='content-wrapper'>
<div class='span12'>


						
						
											
						
							<?= $D->groups_html ?>
						
				



			</div>
		</div></div>
	</div>
</div>
</div>
</div><div class="clearfix"></div>
<?php
	
	$this->load_template('footer.php');
	
?>