
<?php $__env->startSection('title'); ?>
    <?php echo e($data->title); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php if($data->meta_tag != null || $data->meta_description != null): ?>
<?php $__env->startSection('meta_content'); ?>
<meta property="og:title" content="<?php echo e($data->title); ?>" />
<meta property="og:description" content="<?php echo e($data->meta_description != null ? $data->meta_description : strip_tags($data->meta_description)); ?>" />

<meta name="keywords" content="<?php echo e($data->meta_tag); ?>">
<meta name="description" content="<?php echo e($data->meta_description); ?>">

<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

 <!--Main Breadcrumb Area Start -->
 <div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="pagetitle">
          <?php echo e($data->title); ?>

        </h1>
        <ul class="pages">
          <li>
            <a href="<?php echo e(route('front.index')); ?>">
              <?php echo e(__('Home')); ?>

            </a>
          </li>
          <li class="active">
            <a href="<?php echo e(route('front.pages',$data->slug)); ?>">
              <?php echo e($data->title); ?>

            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Main Breadcrumb Area End -->


    <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 py-5">
              <div class="about-info">
                  <?php echo $data->details; ?>

              </div>
            </div>
          </div>
        </div>
      </section>
  
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/page.blade.php ENDPATH**/ ?>