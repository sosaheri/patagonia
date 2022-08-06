<?php $__env->startSection('title'); ?>
<?php echo e(('Faq | ')); ?><?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--Main Breadcrumb Area Start -->
<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="pagetitle">
            <?php echo e(__('FAQ')); ?>

          </h1>
          <ul class="pages">
            <li>
              <a href="<?php echo e(route('front.index')); ?>">
                <?php echo e(__('Home')); ?>

              </a>
            </li>
            <li class="active">
              <a href="<?php echo e(route('front.faq')); ?>">
                <?php echo e(__('FAQ')); ?>

              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--Main Breadcrumb Area End -->


  <!-- faq Area Start -->
  <section class="faq-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div id="accordion">

            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3 class="heading"><?php echo e($fq->title); ?></h3>
            <div class="content">
                <p><?php echo $fq->details; ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq Area End-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  /*-----------------------------
      Accordion Active js
  -----------------------------*/
  $("#accordion").accordion({
    heightStyle: "content",
    collapsible: true,
    icons: {
      "header": "ui-icon-caret-1-e",
      "activeHeader": "ui-icon-caret-1-s"
    }
  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/faq.blade.php ENDPATH**/ ?>