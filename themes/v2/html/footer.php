<?php
	
	$this->load_langfile('outside/footer.php');
	$this->load_langfile('inside/footer.php');
	
?>
				</div>
			</div>
		
		<br><br>
		<?php
			// Important - do not remove this:
			$this->load_template('footer_cronsimulator.php');
			if( $C->DEBUG_MODE ) { $this->load_template('footer_debuginfo.php'); }
		?>
		
		<?php
			@include( $C->INCPATH.'../themes/include_in_footer.php' );
		?>


<!-- Akhir Konten -->

<!-- Mulai Footer -->

<footer id="footer" style="
    border-top: 5px solid #f34541;
">
  

				
		



      <div id="sub-floor">
        <div class="container">
          <div class="pepek">






        <div class="col-sm-6 col-md-3">
              <div id="meta-3" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Fansubs</h4>			<ul>
						<li><i class='icon-caret-right'></i> <a href="#">Tambahkan</a></li>
</div>            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              		<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">		<h4 class="widgettitle">Tentang</h4>		<ul>
				<li><i class='icon-caret-right'></i> <a href="<?= $C->SITE_URL ?>contacts"><?= $this->lang('os_ftrlinks_sa_support') ?></a></li>
					<li><i class='icon-caret-right'></i> <a href="<?= $C->SITE_URL ?>faq"><?= $this->lang('os_ftrlinks_sa_faq') ?></a></li>
					<?php if( isset($C->TERMSPAGE_ENABLED,$C->TERMSPAGE_CONTENT) && $C->TERMSPAGE_ENABLED==1 && !empty($C->TERMSPAGE_CONTENT) ) { ?>
					<li><i class='icon-caret-right'></i> <a href="<?= $C->SITE_URL ?>terms"><?= $this->lang('os_ftrlinks_sa_terms') ?></a></li>
					<?php } ?>
					<li><i class='icon-caret-right'></i> <a href="/api">API Development</a></li>
					<li><i class='icon-caret-right'></i> <a href="/fansubs">Pendaftaran Fansubs</a></li>
				</ul>
		</div>            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <div id="meta-4" class="widget widgetFooter widget_meta"><h4 class="widgettitle">Kontak Staff</h4>	

              		<ul>

<li><i class='icon-caret-right'></i> <a href="http://fb.com/pherry.senpai">Pherry Kun</a>

              		</ul>
</div>            </div> <!-- end widget1 -->

             <!-- end widget1 -->
          </div> 
          </footer>
          <footer>
           <div id="sub-floore">
           	<div class="container">
          <div style="float:left;">
              &copy; 2014 MadoStream &middot; <a href="#">Ketentuan</a> &middot; <a href="#">Privasi</a> &middot; <a href="#">Cookies</a> &middot; <a href="#">Kontak</a> &middot; <a href="#">API</a>
            </div>
            <div class="col-md-offset-4 attribution">
              Made in Indonesia <i class='flag flag-id'></i> by <a target="_blank" href="http://fb.com/pherry.senpai">Pherry</a> Project 
            </div><!-- end .row -->
        </div></div>
    </div>
      </div>
  </footer>

     <!-- Akhir Footer -->


<!-- Javascript Footer -->

		<!-- / jquery -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/jquery/jquery.min.js' type='text/javascript'></script>


<!-- / jquery mobile events (for touch and slide) -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/mobile_events/jquery.mobile-events.min.js' type='text/javascript'></script>
<!-- / jquery migrate (for compatibility with new jquery) -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/jquery/jquery-migrate.min.js' type='text/javascript'></script>
<!-- / jquery ui -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/jquery_ui/jquery-ui.min.js' type='text/javascript'></script>
<!-- / bootstrap -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/bootstrap/bootstrap.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/flot/excanvas.js' type='text/javascript'></script>
<!-- / sparklines -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/sparklines/jquery.sparkline.min.js' type='text/javascript'></script>
<!-- / flot charts -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/flot/flot.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/flot/flot.resize.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/flot/flot.pie.js' type='text/javascript'></script>
<!-- / bootstrap switch -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js' type='text/javascript'></script>
<!-- / fullcalendar -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fullcalendar/fullcalendar.min.js' type='text/javascript'></script>
<!-- / datatables -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/datatables/jquery.dataTables.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js' type='text/javascript'></script>
<!-- / wysihtml5 -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/common/wysihtml5.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/common/bootstrap-wysihtml5.js' type='text/javascript'></script>
<!-- / select2 -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/select2/select2.js' type='text/javascript'></script>
<!-- / color picker -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js' type='text/javascript'></script>
<!-- / mention -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/mention/mention.min.js' type='text/javascript'></script>
<!-- / input mask -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/input_mask/bootstrap-inputmask.min.js' type='text/javascript'></script>
<!-- / fileinput -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileinput/bootstrap-fileinput.js' type='text/javascript'></script>
<!-- / modernizr -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/modernizr/modernizr.min.js' type='text/javascript'></script>
<!-- / retina -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/retina/retina.js' type='text/javascript'></script>
<!-- / fileupload -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/tmpl.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/load-image.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/canvas-to-blob.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/jquery.iframe-transport.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/jquery.fileupload.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fileupload/jquery.fileupload-init.js' type='text/javascript'></script>
<!-- / timeago -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/timeago/jquery.timeago.js' type='text/javascript'></script>
<!-- / slimscroll -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/slimscroll/jquery.slimscroll.min.js' type='text/javascript'></script>
<!-- / autosize (for textareas) -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/autosize/jquery.autosize-min.js' type='text/javascript'></script>
<!-- / charCount -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/charCount/charCount.js' type='text/javascript'></script>
<!-- / validate -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/validate/jquery.validate.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/validate/additional-methods.js' type='text/javascript'></script>
<!-- / naked password -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/naked_password/naked_password-0.2.4.min.js' type='text/javascript'></script>
<!-- / nestable -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/nestable/jquery.nestable.js' type='text/javascript'></script>
<!-- / tabdrop -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/tabdrop/bootstrap-tabdrop.js' type='text/javascript'></script>
<!-- / jgrowl -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/jgrowl/jquery.jgrowl.min.js' type='text/javascript'></script>
<!-- / bootbox -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootbox/bootbox.min.js' type='text/javascript'></script>
<!-- / inplace editing -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/xeditable/bootstrap-editable.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/xeditable/wysihtml5.js' type='text/javascript'></script>
<!-- / ckeditor -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/ckeditor/ckeditor.js' type='text/javascript'></script>
<!-- / filetrees -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/dynatree/jquery.dynatree.min.js' type='text/javascript'></script>
<!-- / datetime picker -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js' type='text/javascript'></script>
<!-- / daterange picker -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_daterangepicker/moment.min.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js' type='text/javascript'></script>
<!-- / max length -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js' type='text/javascript'></script>
<!-- / dropdown hover -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js' type='text/javascript'></script>
<!-- / slider nav (address book) -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/slider_nav/slidernav-min.js' type='text/javascript'></script>
<!-- / fuelux -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/plugins/fuelux/wizard.js' type='text/javascript'></script>
<!-- / flatty theme -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/nav.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/tables.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/theme.js' type='text/javascript'></script>
<!-- / demo -->
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/demo/jquery.mockjax.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/demo/inplace_editing.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/demo/charts.js' type='text/javascript'></script>
<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/demo/demo.js' type='text/javascript'></script>

<script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/lazy.js' type='text/javascript'></script>
	<script type="text/javascript" charset="utf-8">
  $(function() {
     $("div.lazy").lazyload({
       effect : "fadeIn"
     });
  });
  </script>
  <script src='<?= $C->CDN_URL ?>themes/<?= $C->THEME ?>/javascripts/pace.js' type='text/javascript'></script>
  

	</body>
	
</html>
                            
                            
                            