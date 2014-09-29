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
                <i class='icon-bullhorn'></i>
                <span>Daftar Anime</span>

            </h1>
        </div>
        </div>
    </div>
</div>

<div class="container">










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

				
			
<div class='container'>
<div class='row-fluid'>


   

						
						
											
						
							<?= $D->groups_html ?>
						
				



			
		</div></div>
	</div>
</div>
</div>
<?php
	
	$this->load_template('footer.php');
	
?>