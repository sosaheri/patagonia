

<?php $__env->startSection('content'); ?>

<?php
    $user = Auth::user();
?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Dashboard')); ?></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Dashboard')); ?></li>
    </ol>
</div>

<div class="row mb-3">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-primary">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white mb-1"><?php echo e(__('Total Hotel')); ?></div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo e(App\Models\Hotel::where('author_id',$user->id)->where('author_type','user')->count()); ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hotel fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-success">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white mb-1"><?php echo e(__('Total Tour')); ?></div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo e(App\Models\TourModel::where('author_id',$user->id)->where('author_type','user')->count()); ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fab fa-tripadvisor fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-danger ">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white mb-1"><?php echo e(__('Total Car')); ?></div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo e(App\Models\Car::where('author_id',$user->id)->where('author_type','user')->count()); ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100 bg-secondary">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-white mb-1"><?php echo e(__('Total Space')); ?></div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?php echo e(App\Models\Space::where('author_id',$user->id)->where('author_type','user')->count()); ?></div>

                    </div>
                    <div class="col-auto">
                        <i class="fas fa-home fa-2x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php if($hotels->count() > 0): ?>
        <!-- Datatables -->
  <div class="col-lg-12">
    <div class="card mb-4">
        
        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="table-responsive p-3">
            <h3 class="mb-3">
                <?php echo e(__('Recent Hotel Book')); ?>

            </h3>
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th width="20%"><?php echo e(__('Service')); ?></th>
                        <th width="25%"><?php echo e(__('Customer')); ?></th>
                        <th width="10%"><?php echo e(__('Total')); ?></th>
                        <th width="10%"><?php echo e(__('Book Time')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($hotel->hotel->title); ?></td>
                        <td>
                            <ul class="list-unstyled">
                                <li> <b><?php echo e(__('Name:')); ?></b><?php echo e($hotel->name); ?></li>
                                <li><b><?php echo e(__('Email:')); ?></b><?php echo e($hotel->email); ?></li>
                                <li><b><?php echo e(__('Number:')); ?></b><?php echo e($hotel->number); ?></li>
                                <li><b><?php echo e(__('City:')); ?></b><?php echo e($hotel->city); ?></li>
                            </ul>
                        </td>
                        <td>
                            <?php echo e(round($hotel->total * $hotel->currency_value,2)); ?>

                        </td>
                        <td>
                            <?php echo e($hotel->created_at->format('d/m/Y')); ?>

                        </td>
                        <td>
                            <div class="action-list">
                                <a href="<?php echo e(route('admin.hotel.order.details',$hotel->id)); ?>"  class="btn btn-primary btn-sm mr-2 order_details" data-toggle="modal" data-target="#viewDetails">
                                   <?php echo e(__('Details')); ?>

                                </a>
                            </div>
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>  
    <?php endif; ?>

<?php if($cars->count() > 0): ?>
      <!-- Datatables -->
  <div class="col-lg-12">
    <div class="card mb-4">
        
        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="table-responsive p-3">
            <h3 class="mb-3">
                <?php echo e(__('Recent Car Book')); ?>

            </h3>
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th width="20%"><?php echo e(__('Service')); ?></th>
                        <th width="25%"><?php echo e(__('Customer')); ?></th>
                        <th width="10%"><?php echo e(__('Total')); ?></th>
                        <th width="10%"><?php echo e(__('Book Time')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($car->car->title); ?></td>
                        <td>
                            <ul class="list-unstyled">
                                <li> <b><?php echo e(__('Name:')); ?></b><?php echo e($car->name); ?></li>
                                <li><b><?php echo e(__('Email:')); ?></b><?php echo e($car->email); ?></li>
                                <li><b><?php echo e(__('Number:')); ?></b><?php echo e($car->number); ?></li>
                                <li><b><?php echo e(__('City:')); ?></b><?php echo e($car->city); ?></li>
                            </ul>
                        </td>
                        <td>
                            <?php echo e(round($car->total * $car->currency_value,2)); ?>

                        </td>
                        <td>
                            <?php echo e($car->created_at->format('d/m/Y')); ?>

                        </td>
                        <td>
                            <div class="action-list">
                                <a href="<?php echo e(route('admin.car.order.details',$car->id)); ?>"  class="btn btn-primary btn-sm mr-2 order_details" data-toggle="modal" data-target="#viewDetails">
                                   <?php echo e(__('Details')); ?>

                                </a>
                            </div>
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if($space->count() > 0): ?>
<div class="col-lg-12">
    <div class="card mb-4">
        
        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="table-responsive p-3">
            <h3 class="mb-3">
                <?php echo e(__('Recent Space Book')); ?>

            </h3>
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th width="20%"><?php echo e(__('Service')); ?></th>
                        <th width="25%"><?php echo e(__('Customer')); ?></th>
                        <th width="10%"><?php echo e(__('Total')); ?></th>
                        <th width="10%"><?php echo e(__('Book Time')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $space; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $space): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($space->space->title); ?></td>
                        <td>
                            <ul class="list-unstyled">
                                <li> <b><?php echo e(__('Name:')); ?></b><?php echo e($space->name); ?></li>
                                <li><b><?php echo e(__('Email:')); ?></b><?php echo e($space->email); ?></li>
                                <li><b><?php echo e(__('Number:')); ?></b><?php echo e($space->number); ?></li>
                                <li><b><?php echo e(__('City:')); ?></b><?php echo e($space->city); ?></li>
                            </ul>
                        </td>
                        <td>
                            <?php echo e(round($space->total * $space->currency_value,2)); ?>

                        </td>
                        <td>
                            <?php echo e($space->created_at->format('d/m/Y')); ?>

                        </td>
                        <td>
                            <div class="action-list">
                                <a href="<?php echo e(route('admin.space.order.details',$space->id)); ?>"  class="btn btn-primary btn-sm mr-2 order_details" data-toggle="modal" data-target="#viewDetails">
                                   <?php echo e(__('Details')); ?>

                                </a>
                            </div>
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if($tours->count() > 0): ?>
  
<div class="col-lg-12">
    <div class="card mb-4">
        
        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="table-responsive p-3">
            <h3 class="mb-3">
                <?php echo e(__('Recent Tour Book')); ?>

            </h3>
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th width="20%"><?php echo e(__('Service')); ?></th>
                        <th width="25%"><?php echo e(__('Customer')); ?></th>
                        <th width="10%"><?php echo e(__('Total')); ?></th>
                        <th width="10%"><?php echo e(__('Book Time')); ?></th>
                        <th width="15%"><?php echo e(__('Action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tour->tour->title); ?></td>
                        <td>
                            <ul class="list-unstyled">
                                <li> <b><?php echo e(__('Name:')); ?></b><?php echo e($tour->name); ?></li>
                                <li><b><?php echo e(__('Email:')); ?></b><?php echo e($tour->email); ?></li>
                                <li><b><?php echo e(__('Number:')); ?></b><?php echo e($tour->number); ?></li>
                                <li><b><?php echo e(__('City:')); ?></b><?php echo e($tour->city); ?></li>
                            </ul>
                        </td>
                        <td>
                            <?php echo e(round($tour->total * $tour->currency_value,2)); ?>

                        </td>
                        <td>
                            <?php echo e($tour->created_at->format('d/m/Y')); ?>

                        </td>
                        <td>
                            <div class="action-list">
                                <a href="<?php echo e(route('admin.tour.order.details',$tour->id)); ?>"  class="btn btn-primary btn-sm mr-2 order_details" data-toggle="modal" data-target="#viewDetails">
                                   <?php echo e(__('Details')); ?>

                                </a>
                            </div>
                        </td>
                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>  
<?php endif; ?>




</div>
<!--Row-->
<!--Row-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete')); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center"><?php echo e(__('Are you sure?')); ?>.</p>
                <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                <a class="btn btn-danger btn-ok"><?php echo e(__('Delete')); ?></a>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="viewDetails" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered dialog modal-lg">
      <div class="modal-content" id="show_order">
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/user/dashboard.blade.php ENDPATH**/ ?>