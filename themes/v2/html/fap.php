<?php
	
	$this->load_template('header.php');
	
?>
				

<?php
						if( $D->tab == 'activation' )
	

	{
	echo'
	<style>
	.faps {
display: block;
/* float: left; */
line-height: 1.2;
background-color: #303743;
padding: 2px;
line-width: 20px;
margin: 3px 2px 3px 3px;
color: #fff;
border: 1px solid #3B475A;
border-radius: 5px;
padding: 20px;
font-size: 20px;

	</style>
	<center>
	<h2>
	Konfirmasi Persetujuan</h2>
	<br><br>
	Sebelum menggunakan layanan ini. Anda diharuskan untuk menyetujui persetujuan kami berikan<br>
	Layanan yang akan Anda lihat mungkin memuat konten yang hanya sesuai untuk orang dewasa. Jika Anda sudah mencukupi umur untuk mengakses layanan ini Anda diperbolehkan untuk menggunakannya. Kami tidak bertanggung jawab atas apa yang akan Anda lakukan.
	<br>
	<br>

	<form method="post" action="" enctype="multipart/form-data">
	<input type="hidden" name="hentai" value="1">				
	<input type="submit" class="faps" name="hentaiapprove" value="Saya mengerti dan ingin melanjutkan"> 
<br>
* Klik 2 kali




	</center>
	';
	}
	
	
	
    ?>


    <?php
						if( $D->tab == 'approved' ) { ?>
			<div id="invcenter">
						
						<h2>
							<div style="float:left">Daftar Anime Hentai +</div>
							<a href="<?= $C->SITE_URL ?>groups/new" class="newgroupbtn"><b>Tambahkan Anime Baru</b></a>
							<div class="klear"></div>
						</h2>
						
						<?php if( $this->param('msg')=='deleted' ) { ?>
						<?= okbox($this->lang('groups_msgbox_deleted_ttl'), $this->lang('groups_msgbox_deleted_txt')) ?>
						<?php } ?>	
						
						<div class="htabs" style="margin-bottom:6px; margin-top:0px; overflow:visible;">
							<a href="<?= $C->SITE_URL ?>groups/tab:all" class="<?= $D->tab=='all'?'onhtab':'' ?>"><b>Semua Anime <small><?= ($D->tab=='all')? '('.$D->num_results.')' : '' ?></small></b></a>
							<?php if( $this->user->is_logged ) { ?>
							<a href="<?= $C->SITE_URL ?>groups/tab:fav" class="<?= $D->tab=='fav'?'onhtab':'' ?>"><b>Favorit Saya <small><?= ($D->tab=='fav')? '('.$D->num_results.')' : '' ?></small></b></a>
							<? } ?>
							<?php if( $D->num_results > 1 ) { ?>
							<div id="postfilter">
								<a href="javascript:;" onclick="dropdiv_open('postfilteroptions');" id="postfilterselected" onfocus="this.blur();"><span><?= $this->lang('groups_orderby_'.$D->orderby) ?></span></a>
								<div id="postfilteroptions" style="display:none;">
									<a href="<?= $C->SITE_URL ?>groups/tab:<?= $D->tab ?>/orderby:name" style="float:none;"><?= $this->lang('groups_orderby_name') ?></a>
									<a href="<?= $C->SITE_URL ?>groups/tab:<?= $D->tab ?>/orderby:date" style="float:none;"><?= $this->lang('groups_orderby_date') ?></a>

								</div>
								<span><?= $this->lang('groups_orderby_ttl') ?></span>
							</div>
							<?php } ?>
						</div>
						
						<div class="htabs" style="margin:0px; height:1px;"></div>
						
						<div id="grouplist" class="groupspage">
							<?= $D->groups_html ?>
						</div>
	<? }  ?>



	
	





					
<?php
	
	$this->load_template('footer.php');
	
?>