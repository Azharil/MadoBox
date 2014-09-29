                                <?php
	
	$this->load_template('header.php');
	
	?>

	 <div class="container">



			<div class="row-fluid">
		<div class='span6 offset3 box '>
    
 
          
            </div>

      <div class='box-content'>
            <div class='padding' style='padding:50px; background: url(<?= $C->CDN_URL ?>/themes/v2/images/anip1.png) no-repeat 87px 51px;'>
                <div class='modal' style='position: relative; top: auto; left: auto; right: auto; margin: 0 auto 20px; z-index: 1; max-width: 100%;'>
                    <div class='modal-header'>
                      
                        <h3>Selamat datang kembali</h3>
                    </div>
                      <div class='modal-body'>
                      		<script type="text/javascript">
		function js_fix_url() {
			window.location.href	= window.location.href.replace("signout:ok", "");
		}
	</script>
	
			<?php if($D->error) { ?>
				<?= errorbox($this->lang('signin_form_error'), $this->lang($D->errmsg)); ?>
			<?php } elseif($this->param('pass')=='changed') { ?>
				<?= okbox($this->lang('signinforg_alldone_ttl'), $this->lang('signinforg_alldone_txt')) ?>
			<?php } ?>

            <div class='control-group pull-right'>
<?php if( $D->fb_login_url ) { ?>
Atau masuk menggunakan layanan sosial<br><br>
<div class='controls'>
<a  href="<?= $C->SITE_URL ?>twitter-connect?backto=<?= $C->SITE_URL ?>signin/get:twitter" class="btn btn-block btn-social btn-twitter span10">
    <i class="icon-twitter" style="line-height: 29px;
font-size: 20px;"></i> Masuk dengan Twitter
  </a>
</div>
<br><br>
<div class='controls'>
<a href="<?= $D->fb_login_url; ?>" class="btn btn-block btn-social btn-facebook span10">
    <i class="icon-facebook-sign" style="line-height: 28px;
font-size: 20px;"></i> Masuk dengan Facebook
  </a>
</div>
                            <div style="float:left; margin-right:5px;" title="Facebook Connect">
                                <a id="facebookconnect" href="<?= $D->fb_login_url; ?>"></a>
                            </div>
                        <?php } ?>
                        <?php if( isset($C->TWITTER_CONSUMER_KEY,$C->TWITTER_CONSUMER_SECRET) && !empty($C->TWITTER_CONSUMER_KEY) && !empty($C->TWITTER_CONSUMER_SECRET) ) { ?>
                            <a id="twitterconnect" href="<?= $C->SITE_URL ?>twitter-connect?backto=<?= $C->SITE_URL ?>signin/get:twitter" title="Twitter Connect" style="margin-top:3px;"><b></b></a>
                        <?php } ?>

</div>

                    <form class='form' method="post" action="/signin" style='margin-bottom: 0;' />
                        <div class='control-group'>
                            <label class='control-label'>Nama Pengguna</label>
                             <div class='input-prepend controls'>
                                  <span class='add-on'> <i class='icon-user' style="line-height:21px"></i></span>
                                <input class='span10' name="email" id='' type='text' />
                                <p class='help-block' />
                            </div>
                        </div>
                        <div class='control-group'>
                            <label class='control-label'>Kata Sandi</label>
                            <div class='input-prepend controls'>
                                  <span class='add-on'> <i class='icon-lock' style="line-height:21px"></i></span>
                                <input class='span10' name='password' id='' placeholder='' type='password' />
                               
                            </div>

                           

                         </div>
                       
                   
                </div>
              
               
                    <div class='modal-footer'>
                         <button class='btn btn-primary'>Masuk</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
<?php
	
	$this->load_template('footer.php');
	
	?>
                            