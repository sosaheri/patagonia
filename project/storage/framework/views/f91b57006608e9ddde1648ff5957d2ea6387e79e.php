

<?php $__env->startSection('content'); ?>

<div class="modal-header">
    <h5 class="modal-title"><?php echo e(__('Booking ID')); ?>: #<?php echo e($data->order_number); ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-tone-tab" data-toggle="pill" href="#pills-tone" role="tab" aria-controls="pills-tone" aria-selected="true">
          <?php echo e(__('Booking Details')); ?>

      </a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-ttwo-tab" data-toggle="pill" href="#pills-ttwo" role="tab" aria-controls="pills-ttwo" aria-selected="false">
          <?php echo e(__('Customer Information')); ?>

      </a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-tone" role="tabpanel" aria-labelledby="pills-tone-tab">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Booking Status')); ?></span>
                <?php if($data->order_status == 'Pending'): ?>
                <span class="badge badge-info"><?php echo e(__('Pending')); ?></span>
                <?php elseif($data->order_status == 'Processing'): ?>
                <span class="badge badge-primary"><?php echo e(__('Processing')); ?></span>
                <?php elseif($data->order_status == 'Completed'): ?>
                <span class="badge badge-success"><?php echo e(__('Completed')); ?></span>
                <?php else: ?>
                <span class="badge badge-danger"><?php echo e(__('Cancel')); ?></span>
                <?php endif; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Booking Date')); ?></span>
                <span><?php echo e($data->created_at->format('d/m/Y')); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Payment Method')); ?>

                </span>
                <span>
                    <?php echo e($data->method); ?>

                </span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Transaction Id')); ?>

                </span>
                <span>
                    <?php echo e($data->txnid); ?>

                </span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Start date')); ?>:
                </span>
                <span><?php echo e($data->start_date); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('End date')); ?>:
                </span>
                <span><?php echo e($data->end_date); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Nights')); ?>:
                </span>
                <span><?php echo e($data->night); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Adults')); ?>:
                </span>
                <span><?php echo e($data->adult); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Children')); ?>:
                </span>
                <span><?php echo e($data->children); ?></span>
            </li>
            <?php $__currentLoopData = $data->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e($room->room_name); ?> * <?php echo e($room->room_qty); ?>

                </span>
                <?php
                   $room_price = $room->per_night_cost * $room->room_qty;
                ?>
                <span><?php echo e($data->currency_sign); ?> <?php echo e(round($room_price * $data->currency_value,2)); ?>

                </span>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <br>
        <?php if($data->extra_price): ?>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <b><?php echo e(__('Extra Prices')); ?>:</b>
                <span></span>
            </li>
            <?php $__currentLoopData = explode(',',$data->extra_price); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $e_price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span><?php echo e(explode(',',$data->extra_name)[$key]); ?> <small>(<?php echo e(str_replace('_',' ',explode(',',$data->extra_type)[$key])); ?>) </small> :
                    </span>
                    <span><?php echo e($data->currency_sign); ?> <?php echo e(round($e_price * $data->currency_value,2)); ?>

                    </span>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <br>
        <?php endif; ?>
        <?php if($data->summery): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(('Summery')); ?>:
                </span>
                <span><?php echo e($data->summery); ?></span>
            </li>
        <?php endif; ?>
        
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <b><?php echo e(__('Service Fee')); ?>:
                </b>
                <b><?php echo e(PriceHelper::showCurrencyPrice($data->service_charge)); ?>

                </b>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <b><?php echo e(__('Total')); ?>:
                </b>
                <b><?php echo e($data->currency_sign); ?> <?php echo e(round($data->total * $data->currency_value,2)); ?>

                </b>
            </li>
            
        </ul>
    </div>
    <div class="tab-pane fade" id="pills-ttwo" role="tabpanel" aria-labelledby="pills-ttwo-tab">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Customer Name')); ?></span>
                <span><?php echo e($data->name); ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Customer Email')); ?></span>
                <span><?php echo e($data->email); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Customer Number')); ?>

                </span>
                <span><?php echo e($data->number); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(__('Customer Address')); ?></span>
                <span>
                    <span><?php echo e($data->address); ?>

                </span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(('Customer City')); ?>:
                </span>
                <span><?php echo e($data->city); ?>

                </span>
            </li>
            <?php if($data->state): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(('Customer State')); ?>:
                </span>
                <span>
                    <?php echo e($data->state); ?>

                </span>
            </li>
            <?php endif; ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(('Costomer Country')); ?>:
                </span>
                <span><?php echo e($data->country); ?>

                </span>
            </li>
            <?php if($data->zip_code): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?php echo e(('Zip Code')); ?>:
                </span>
                <span><?php echo e($data->zip_code); ?></span>
            </li>
            <?php endif; ?>
           
        </ul>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/user/hotel/orders/details.blade.php ENDPATH**/ ?>