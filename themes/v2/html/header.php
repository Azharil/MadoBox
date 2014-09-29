                                <?php
	
	$this->user->write_pageview();
	
	$hdr_search	= ($this->request[0]=='members' ? 'users' : ($this->request[0]=='groups' ? 'groups' : ($this->request[0]=='search' ? $D->tab : 'posts') ) );
	
	$this->load_langfile('inside/header.php');
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<title><?= htmlspecialchars($D->page_title) ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="keywords" content="Anime Social Streaming">
	

    
    
 

<!-- Mulai Stylesheet -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/bootstrap/bootstrap.css' media='all' rel='stylesheet' type='text/css' />
   
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / switch buttons -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / xeditable -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/xeditable/bootstrap-editable.css' media='all' rel='stylesheet' type='text/css' />
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / wysihtml5 (wysywig) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/common/bootstrap-wysihtml5.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jquery file upload -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / full calendar -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/fullcalendar/fullcalendar.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / select2 -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/select2/select2.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / mention -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/mention/mention.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / tabdrop (responsive tabs) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/tabdrop/tabdrop.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / jgrowl notifications -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datatables -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/datatables/bootstrap-datatable.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / dynatrees (file trees) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/dynatree/ui.dynatree.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / color picker -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / datetime picker -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / daterange picker) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flags (country flags) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/flags/flags.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / slider nav (address book) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/slider_nav/slidernav.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / fuelux (wizard) -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/plugins/fuelux/wizard.css' media='all' rel='stylesheet' type='text/css' />
    <!-- / flatty theme -->




<style type="text/css">
@font-face {
  font-family: 'FontAwesome';
  src: url("<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/fonts/fontawesome-jnt.eot");
  src: url("<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/fonts/fontawesome-webfont.eot?#iefix") format("embedded-opentype"), url("<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/fonts/fontawesome-webfont.woff") format("woff"), url("<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/fonts/fontawesome-webfont.ttf") format("truetype");
  font-weight: normal;
  font-style: normal; }
</style>

    <link href='<?= $C->SITE_URL ?>themes/<?= $C->THEME ?>/stylesheets/light-theme.css' id='color-settings-body-color' media='all' rel='stylesheet' type='text/css' />
    <!-- / demo -->
    <link href='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/stylesheets/demo.css' media='all' rel='stylesheet' type='text/css' />

<!-- Akhir Stylesheet -->

<!-- Mulai Javascript -->

        <script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/html5shiv.js' type='text/javascript'></script>
	
		<?php if($this->request[0]=='view'){ ?><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><?php } ?>
	
		<script type="text/javascript"> 
			var siteurl = "<?= $C->CDN_URL ?>"; 
			var paging_num_posts = "<?= $C->PAGING_NUM_POSTS ?>"; 
		</script>

<!-- Akhir Javascript -->


		<?php if( isset($D->page_favicon) ) { ?>
		<link href="<?= $D->page_favicon ?>" type="image/x-icon" rel="shortcut icon" />
		<?php } elseif( $C->HDR_SHOW_FAVICON == 1 ) { ?>
		<link href="<?= $C->CDN_URL.'themes/default/imgs/favicon.ico' ?>" type="image/x-icon" rel="shortcut icon" />
		<?php } elseif( $C->HDR_SHOW_FAVICON == 2 ) { ?>
		<link href="<?= $C->IMG_URL.'attachments/'.$this->network->id.'/'.$C->HDR_CUSTOM_FAVICON ?>" type="image/x-icon" rel="shortcut icon" />
		<?php } ?>
		<?php if(isset($D->rss_feeds)) { foreach($D->rss_feeds as &$f) { ?>
		<link rel="alternate" type="application/atom+xml" title="<?= $f[1] ?>" href="<?= $f[0] ?>" />
		<?php }} ?>
		<?php if( $C->SPAM_CONTROL ){ ?>
		<script type="text/javascript"> spam_control_check = true; spam_control_message = "<?= $this->lang('newpost_spam_filter_msg') ?>"; </script>
		<?php } ?>
		<?php if( $this->lang('global_html_direction') == 'rtl' ) { ?>
		<style type="text/css"> #site { direction:rtl; } </style>
		<?php } ?>

<!-- PACE stylesheet -->

<style type="text/css">
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace-inactive {
  display: none;
}

.pace .pace-progress {
  background: #29d;
  position: fixed;
  z-index: 2000;
  top: 40px;
  left: 0;
  height: 2px;

  -webkit-transition: width 1s;
  -moz-transition: width 1s;
  -o-transition: width 1s;
  transition: width 1s;
}

.pace .pace-progress-inner {

}

.pace .pace-activity {
  display: block;
  position: fixed;
  z-index: 2000;
  top: 10px;
  right: 15px;
  width: 14px;
  height: 14px;
  border: solid 2px transparent;
  border-top-color: #fff;
  border-left-color: #fff;
  border-radius: 10px;
  -webkit-animation: pace-spinner 400ms linear infinite;
  -moz-animation: pace-spinner 400ms linear infinite;
  -ms-animation: pace-spinner 400ms linear infinite;
  -o-animation: pace-spinner 400ms linear infinite;
  animation: pace-spinner 400ms linear infinite;
}

@-webkit-keyframes pace-spinner {
  0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}
@-moz-keyframes pace-spinner {
  0% { -moz-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -moz-transform: rotate(360deg); transform: rotate(360deg); }
}
@-o-keyframes pace-spinner {
  0% { -o-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -o-transform: rotate(360deg); transform: rotate(360deg); }
}
@-ms-keyframes pace-spinner {
  0% { -ms-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -ms-transform: rotate(360deg); transform: rotate(360deg); }
}
@keyframes pace-spinner {
  0% { transform: rotate(0deg); transform: rotate(0deg); }
  100% { transform: rotate(360deg); transform: rotate(360deg); }
}





</style>
<style>
.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #292929;
    color: #eeeeee;
    width: 50px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
    background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
    opacity: 1.0;
}
.scroll-top-wrapper i.fa {
    line-height: inherit;
}
 
</style>

<style>

<?= in_array( $this->request[0], array('signup', 'signin') )?' body {background-image: url('. $C->CDN_URL.'/themes/v2/images/bg.png);} ':'' ?>
<?= in_array( $this->request[0], array('404', 'maintenance') )?' body {background:  url('.$C->CDN_URL.'/themes/v2/render.png) no-repeat 250px 30px, url(/themes/v2/images/bg.png););} ':'' ?>


</style>


<script>
 
$(function(){
 
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
 
    $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
	</head>
	
<!-- Badan Website -->
	<body class='contrast-red '>
		<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <i class="icon-chevron-sign-up" style="font-size: 40px;
line-height: 47px;"></i>
    </span>
</div>
<header>

<!-- Mulai Navigasi -->		
    
    <div class='navbar navbar-default navbar-fixed-top'>
        <div class='navbar-inner'>
        	 <div class="container">
            <div class='container-fluid'>
                <a class='brand' href='/'>
                    <i class='icon-play-circle'></i>
                    <span class='hidden-phone'>MadoStream</span>
                </a>
               
                              

<ul class='nav navbar-nav'>

				<li class="<?= in_array( $this->request[0], array('dashboard', 'home', 'notifications') )?'dark ':'' ?>"><a href="<?= $C->SITE_URL ?>dashboard" class=""><span class="icon-home"></span> Depan</a></li>
							<?php if(!$C->PROTECT_OUTSIDE_PAGES || $this->user->is_logged){ ?>
							<li class="<?= $this->request[0]=='daftar-anime'?'dark':'' ?>"><a href="<?= $C->SITE_URL ?>daftar-anime" class=""><span class="icon-reorder"></span> Daftar Anime</a></li>
							<li class="dropdown <?= $this->request[0]=='genre'?'dark':'' ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-filter"></span> Genre <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
                <li><a href="<?= $C->SITE_URL ?>genre/tab:action"><span class="icon-eye-open"></span> Action</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:comedy"><span class="icon-smile"></span> Comedy</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:drama"><span class="icon-film"></span> Drama</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:ecchi"><span class="icon-plus-sign"></span> Ecchi</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:fantasy"><span class="icon-moon"></span> Fantasy</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:game"><span class="icon-gamepad"></span> Game</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:horror"><span class="icon-ambulance"></span> Horror</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:magic"><span class="icon-magic"></span> Magic</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:mystery"><span class="icon-puzzle-piece"></span> Mystery</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:romance"><span class="icon-heart"></span> Romance</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:school"><span class="icon-book"></span> School</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:scifi"><span class="icon-cogs"></span> Sci-Fi</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:shoujo"><span class="icon-male"> </span>  Shoujo</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:shonen"><span class="icon-female"></span> Shonen</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:sports"><span class="icon-dribbble"></span> Sports</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:supernatural"><span class="icon-beaker"></span> Super Natural</a></li>
                <li><a href="<?= $C->SITE_URL ?>genre/tab:superpower"><span class="icon-dashboard"></span> Super Power</a></li>
               
              </ul>


							</li>
							<li class="dropdown <?= $this->request[0]=='fap'?'dark':'' ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-chevron-sign-down"></span> Lain <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
               							<li class="<?= $this->request[0]=='leaders'?'dark':'' ?>"><a href="<?= $C->SITE_URL ?>leaders" class="<?= $this->request[0]=='leaders'?'onnettab':'' ?>"><span class="icon-star"></span> Top 10</a></li>

                <li><a href="<?= $C->SITE_URL ?>fap"><span class="icon-warning-sign"></span> Fap</a></li>
                <?php if( $this->user->is_logged && $this->user->info->is_network_admin == 1 ) { ?>
							<li><a href="<?= $C->SITE_URL ?>admin" class="<?= $this->request[0]=='admin'?'onnettab':'' ?>"><span><?= $this->lang('hdr_nav_admin') ?></span></a></li>
							<?php } ?>
                
               
              </ul>


							</li>


							

							<?php } ?>
							<?php if($this->user->is_logged){?>
							
							<?php } ?>
							
						 </ul>
					
							<?php if( $this->user->is_logged ) { ?>
							
							<ul class='nav pull-right'>
						     <li class="dropdown dark user-menu <?= $this->request[0]=='genre'?'dark':'' ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						     	 <img  height='23' src='<?= $C->CDN_URL ?>/i/avatars/thumbs3/<?= $this->user->info->avatar ?>' width='23' />

						     	 Me <span class="caret"></span></a>
						     <ul class="dropdown-menu" role="menu">
						     	<li><a href="<?= $C->SITE_URL ?>user"><i class="icon-user"></i> Profil</a></li>

							<li><a href="<?= $C->SITE_URL ?>privatemessages"><i class="icon-inbox"></i> Inbox <?= $D->tabs_state['private'] ?></a></li>

								<li><a href="<?= $C->SITE_URL ?>settings"><i class='icon-cog'></i> Pengaturan</a></li>
								
								<li><a href="<?= $C->SITE_URL ?>members" class="<?= $this->request[0]=='members'?'onnettab':'' ?>"><i class="icon-smile"></i> Teman</a></li>
								 <li class='divider'></li>

								<li><a href="<?= $C->SITE_URL ?>signout"><i class="icon-signout"></i> <?= $this->lang('hdr_nav_signout') ?></a></li>
							</ul>
						</li>
</ul>

							<?php } else { ?>
								<ul class='nav pull-right'>
								<li class="dropdown dark"><a href='#' class="dropdown-toggle" data-toggle="dropdown"><span class="icon-check"> </span>Masuk?</a>
								  <ul class="dropdown-menu" role="menu">
						     	<li><a href="<?= $C->SITE_URL ?>signin"><i class="icon-user"></i> Sudah punya akun</a></li>

						
								 <li class='divider'></li>

								<li><a href="<?= $C->SITE_URL ?>signup"><i class="icon-signout"></i> Buat akun baru</a></li>
							</ul>
						</li>
</ul>
							</ul>


                    












							<?php } ?>
							
								<form name="search_form" method="post" action="<?= $C->SITE_URL ?>search" class="navbar-search pull-right hidden-phone">
									<input type="hidden" name="lookin" value="<?= $hdr_search ?>" />
									<button class="btn btn-link icon-search" name="button" type="submit"></button>

                    <input autocomplete="off" class="search-query span2" id="q_header" name="lookfor" placeholder="Ingin cari apa?" type="text" value="<?= isset($D->search_string)?htmlspecialchars($D->search_string):'' ?>" />

                                 
						
                </form>
            </div>
        </div>
</div>

			</header>	
						<br><br>
				<div id="slim_msgbox" style="display:none;">
					<strong id="slim_msgbox_msg"></strong>
					<a href="javascript:;" onclick="msgbox_close('slim_msgbox'); this.blur();" onfocus="this.blur();"><b><?= $this->lang('pf_msg_okbutton') ?></b></a>
				
				</div>
				

				
	<!-- Akhir Navigasi -->
	<!-- Konten Wesite -->
                            
                            
                            