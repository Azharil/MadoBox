                                                                <?php
	
	$this->load_template('header.php');
	
?> 


	 <div class="container">
	<style>
				.po_icon {
width: 152px;
height: 140px;
margin-left: 10px;
}
.under_po_icon {
width: 140px;
/* height: 12px; */
margin-left: 10px;
text-align: center;
font-size: 13px;
border: 1px solid #7795B8;
background-color: #7795B8;
padding: 5px;
color: #fff;
}
</style>
		

<div class="row-fluid">
		<div class='span8 box'>
       <div class='box-header'>
  
  
</div>

           
        <div class='box-content'>
            <div class='carousel slide carousel-without-caption' id='myCarousel' style='margin-bottom:0;'>
                <ol class='carousel-indicators'>
                    <li class='active' data-slide-to='0' data-target='#myCarousel'></li>
                    <li data-slide-to='1' data-target='#myCarousel'></li>
                    <li data-slide-to='2' data-target='#myCarousel'></li>
                </ol>
                <!-- Carousel items -->
                <div class='carousel-inner'>
                   
                     <div class='active item'><img alt="460x200&amp;text=1" src="<?= $C->CDN_URL ?>/akame.jpg" />
                        <div class="carousel-caption">
   
    <p style="color:#fff">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
    
  </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class='carousel-control left' data-slide='prev' href='#myCarousel'>‹</a>
                <a class='carousel-control right' data-slide='next' href='#myCarousel'>›</a>
            </div>
        </div>
    </div>


<div class='span4 box'>
  <div class='box-header'>
  
  
</div>

  <div class='box-content box-statistic'>
                    <h3 class='title text-error'><?=$D->num_posts ?></h3>
                    <small>Jumlah Episode</small>
                    <div class='text-error icon-inbox align-right'></div>
                </div>
                <div class='box-content box-statistic'>
                    <h3 class='title text-warning'><?=$D->num_anime ?></h3>
                    <small>Jumlah Anime</small>
                    <div class='text-warning icon-check align-right'></div>
                </div>
               <div class='box-content box-statistic'>
                    <h3 class='title text-warning'><?=$D->num_members ?></h3>
                    <small>Jumlah Anggota</small>
                    <div class='text-warning icon-check align-right'></div>
                </div>
            </div>

</div>
						
						<?php if(!$C->PROTECT_OUTSIDE_PAGES){ ?>
							<div class="row-fluid">
		<div class='span8 box'>
       <div class='box-header red-background'>
    <div class='title'>
        <i class='icon-star'></i>
        Populer saat ini
    </div>
   
</div>
        <div class='box-content'>
            <div class='row-fluid'>

                
<?= $D->groups_html ?>
        
            </div>
        </div>
    </div>

             <?php if( count($D->last_online) > 0 ) { ?>
						
		<div class='span4 box'>
       <div class='box-header blue-background'>
    <div class='title'>
        <i class='icon-eye-open'></i>
        Sedang Aktif
    </div>
   
</div>
        <div class='box-content'>
            <div class='row-fluid'>

							<?php foreach($D->last_online as $u) { ?>
							<a href="<?= userlink($u['username']) ?>"   ><img src="<?= $C->CDN_URL ?>/i/avatars/thumbs1/<?= $u['avatar'] ?>" alt="" style="padding:3px;" class="has-tooltip" data-placement="bottom" title="" data-original-title="<?= htmlspecialchars($u['username']) ?>" /></a>
							<?php } ?>
						
            </div>
        </div>
    </div>
						<?php } ?> 
          
</div>






			<div class="row-fluid">
		<div class='span8 box'>
       <div class='box-header purple-background'>
    <div class='title'>
        <i class='icon-plus-sign'></i>
        Baru keluar
    </div>
   
</div>
        <div class='box-content'>
            <div class='row-fluid'>

                
<?= $D->posts_html ?>
        
            </div>
        </div>
    </div>


          
</div>



						<?php if( count($D->post_tags) > 0 ) { ?>
						<div class="ttl" style="margin-top:0px; margin-bottom:8px;"><div class="ttl2"><h3><?= $this->lang('dbrd_right_posttags') ?></h3></div></div>
						<div class="taglist" style="margin-bottom:5px;">
							<?php foreach($D->post_tags as $tmp) { ?>
							<a href="<?= $C->SITE_URL ?>search/posttag:%23<?= $tmp ?>" title="#<?= htmlspecialchars($tmp) ?>"><small>#</small><?= htmlspecialchars(str_cut($tmp,25)) ?></a>
							<?php } ?>
						</div>
						<?php } ?>
						
						<?php } ?>
					</div>
<?php
	
	$this->load_template('footer.php');
	
?>
                            
                            