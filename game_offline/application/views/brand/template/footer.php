</section>

<!-- 폼 전송을 위한 히든 프레임-->
<iframe name="hiddenframe"  border="1" frameborder="1" width="100%" height="500" style="display:none"></iframe>
<!-- Vendor -->
<div class="modal fade modal-primary">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- remote ajax call이 되는영역 -->
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script src="<?=base_url('assets/brand'); ?>/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?=base_url('assets/brand'); ?>/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?=base_url('assets/brand'); ?>/vendor/nanoscroller/nanoscroller.js"></script>
<!-- <script src="<?=base_url('assets/brand'); ?>/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>  -->
<!-- <script src="<?=base_url('assets/brand'); ?>/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script> -->
<script src="<?=base_url('assets/brand'); ?>/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?=base_url('assets/brand'); ?>/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="<?=base_url('assets/brand'); ?>/vendor/fuelux/js/spinner.js"></script>



		
<!-- Specific 1st Deposit Event only -->

<!-- Theme Base, Components and Settings -->
<script src="<?=base_url('assets/brand'); ?>/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="<?=base_url('assets/brand'); ?>/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?=base_url('assets/brand'); ?>/javascripts/theme.init.js"></script>
<script>
   function trim(str){
         return str.replace(/(^\s*)|(\s*$)/gi, "");
    }
</script>
</body>
</html>