
<!-- AJAX Js-->
<script type="text/javascript">
	'use strict';			
    var mainurl = "<?php echo e(url('/')); ?>";
    var admin_loader = <?php echo e($gs->is_admin_loader); ?>;
    var lang  = {
          'new': '<?php echo e(__('ADD NEW')); ?>',
          'edit': '<?php echo e(__('EDIT')); ?>',
          'details': '<?php echo e(__('DETAILS')); ?>',
          'update': '<?php echo e(__('Status Updated Successfully.')); ?>',
          'sss': '<?php echo e(__('Success !')); ?>',
          'active': '<?php echo e(__('Activated')); ?>',
          'deactive': '<?php echo e(__('Deactivated')); ?>',
          'loading': '<?php echo e(__('Please wait Data Processing...')); ?>',
          'submit': '<?php echo e(__('Submit')); ?>',
          'enter_name': '<?php echo e(__('Enter Name')); ?>',
          'enter_price': '<?php echo e(__('Enter Price')); ?>',
          'per_day': '<?php echo e(__('Per Day')); ?>',
          'per_month': '<?php echo e(__('Per Month')); ?>',
          'per_year': '<?php echo e(__('Per Year')); ?>',
          'one_time': '<?php echo e(__('One Time')); ?>',
          'enter_title': '<?php echo e(__('Enter Title')); ?>',
          'enter_content': '<?php echo e(__('Enter Content')); ?>',
          'extra_price_name' : '<?php echo e(__('Enter Name')); ?>',
          'extra_price' : '<?php echo e(__('Enter Price')); ?>',
          'policy_title' : '<?php echo e(__('Enter Title')); ?>',
          'policy_content' : '<?php echo e(__('Enter Content')); ?>',
      };
      
</script>
<script src="<?php echo e(asset('assets/admin/js/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/jquery-migrate-3.3.2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/admin/js/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>

<script src="<?php echo e(asset('assets/admin/js/select-2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/nicEdit.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/ruang-admin.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/notify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/tagify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/tagify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/dropzone/dropzone.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/load.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/myscript.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/jquery-form.js')); ?>"></script>



<?php /**PATH /opt/lampp/htdocs/patagonia/project/resources/views/admin/partials/scripts.blade.php ENDPATH**/ ?>