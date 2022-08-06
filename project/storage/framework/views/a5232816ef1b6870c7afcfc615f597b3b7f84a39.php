


<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Hotels')); ?></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('user-dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Hotels')); ?></li>
      </ol>
  </div>

  <div class="row">
      <div class="col-lg-12">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              </div>
              <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="table-responsive p-3">
                  <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                      <thead class="thead-light">
                          <tr>
                              <th><?php echo e(__('Name')); ?></th>
                              <th><?php echo e(__('Location')); ?></th>
                              <th><?php echo e(__('Price')); ?></th>
                              <th><?php echo e(__('Rating')); ?></th>
                              <th><?php echo e(__('Status')); ?></th>
                              <th><?php echo e(__('Action')); ?></th>
                          </tr>
                      </thead>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">

          <div class="modal-header d-block text-center">
              <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete')); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p class="text-center"><?php echo e(__('Are you sure?')); ?>.</p>
              <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
          </div>
          <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
              <a class="btn btn-danger btn-ok"><?php echo e(__('Delete')); ?></a>
          </div>

      </div>
  </div>
</div>
<input type="hidden" value="1" id="isValue">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
$(function ($) {
    "use strict";

		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '<?php echo e(route('user-hotel-datatables')); ?>',
               columns: [
                        { data: 'title', name: 'title' },
                        { data: 'location', name: 'location' },
                        { data: 'main_price', name: 'main_price' },
                        { data: 'rating', name: 'rating' },
                        { data: 'status', name: 'status' },
            			{ data: 'action', searchable: false, orderable: false }
                     ],

                language : {
                	processing: '<img class="" src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>">'
                },
			
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 col-md-4 text-right mb-2">'+
        '<a class="btn btn-primary " href="<?php echo e(route('user-hotel-create')); ?>" >'+
        '<i class="fas fa-plus"></i> <?php echo e(__('Add New Hotel')); ?>'+
        '</a>'+
        '</div>');
      });
});

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/user/hotel/index.blade.php ENDPATH**/ ?>