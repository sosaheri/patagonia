

<?php $__env->startSection('title'); ?>
<?php echo e(('Success | ')); ?><?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						<?php echo e(__('Payment Success')); ?>

					</h1>
					<ul class="pages">
						<li>
							<a href="<?php echo e(route('front.index')); ?>">
								<?php echo e(__('Home')); ?>

							</a>
						</li>
						<li class="active">
							<a href="<?php echo e(Request::url()); ?>">
							<?php echo e(__('Payment Success')); ?>

							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->



<section class="thankyou">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-11">
          <div class="content">
            <div class="icon">
                <i class="far fa-check-circle"></i>
            </div>
            <h4 class="heading">
                 <?php echo e($gs->order_title); ?>

                
            </h4>
            <p class="text">
                <?php echo e($gs->order_text); ?>

            </p>
            <a href="<?php echo e(route('front.index')); ?>" class="link"><?php echo e(__('Get Back To Our Homepage')); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/success.blade.php ENDPATH**/ ?>