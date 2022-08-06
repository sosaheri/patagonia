
<?php $__env->startSection('title'); ?>
   Error 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="pagetitle">
          <?php echo e(__('Error')); ?>

        </h1>
        <ul class="pages">
          <li>
          <a href="<?php echo e(route('front.index')); ?>">
              <?php echo e(__('Home')); ?>

            </a>
          </li>
          <li class="active">
            <a href="javascript:;">
              <?php echo e(__('Error')); ?>

            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Area End -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
          <img src="<?php echo e($gs->error_photo ? asset('assets/images/genarel-settings/'.$gs->error_photo) : ''); ?>" alt="">
              <?php echo $gs->error_title; ?>

              <?php echo $gs->error_text; ?>

            <a class="mybtn1 pt-3" href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Back Home')); ?></a>
          </div>
        </div>
      </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/errors/404.blade.php ENDPATH**/ ?>