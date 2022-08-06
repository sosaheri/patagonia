
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Hotels')); ?> |  <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--Main Breadcrumb Area Start -->
<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pagetitle">
					<?php echo e(__('All Hotel')); ?>

				</h1>
				<ul class="pages">
					<li>
						<a href="<?php echo e(route('front.index')); ?>">
							<?php echo e(__('Home')); ?>

						</a>
					</li>
					<li class="active">
						<a href="<?php echo e(route('front.hotels')); ?>">
							<?php echo e(__('Hotel')); ?>

						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Main Breadcrumb Area End -->

<!-- sub-categori Area Start -->
<section class="sub-categori">
	<div class="container">
		<div class="row check_position">
			<div class="ajax_loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->website_loader)); ?>) no-repeat scroll center center rgba(0,0,0,.6);"></div>
			<?php if ($__env->exists('front.inc.searching_sitebar')) echo $__env->make('front.inc.searching_sitebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="col-lg-9 order-first order-lg-last">
				<div class="right-area">
					<?php echo $__env->make('front.inc.filter_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php if($hotels->count() > 0 ): ?>
					<div class="categori-item-area" id="hotel_ajax_load">
						<div class="row">
							<?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-md-6">
								<div href="#" class="single-tours">
									<div class="img-area">
											<?php if($hotel->discount): ?>
											<div class="discount">
												<?php echo e($hotel->discount); ?>%
											</div>
											<?php endif; ?>
										<?php if($hotel->is_feature): ?>
										<div class="feature">
												<?php echo e(__('Featured')); ?>

										</div>
										<?php endif; ?>
										<img src="<?php echo e(asset('assets/images/hotel-image/'.$hotel->image->image)); ?>" alt="hotel-image">
									</div>
									<div class="content">
										<span class="add-favotite corsor-pointer" data-href="<?php echo e(route('front.favarite',$hotel->id.',,hotel')); ?>">
											<?php if(App\Models\Favarite::where('data_id',$hotel->id)->where('type','hotel')->exists()): ?>
												<i class="fas fa-check"></i>
											<?php else: ?>
											<i class="far fa-heart"></i>
											<?php endif; ?>
										</span>
										<p class="country">
												<i class="fas fa-plane"></i><?php echo e($hotel->country->country); ?>

										</p>
										<h4 class="title">
											<a href="<?php echo e(route('hotel.details',$hotel->slug)); ?>"><?php echo e($hotel->title); ?></a>
										</h4>
										<div class="review-area">
											<div class="stars">
												<div class="ratings">
													<div class="empty-stars"></div>
													<div class="full-stars" style="width:<?php echo e($hotel->review() * 20); ?>%"></div>
												  </div>
											</div>
											<span class="review">
												<?php echo e($hotel->review()); ?> <?php echo e(__('Review')); ?>

											</span>
										</div>
										<div class="price-area-wrapper">
											<div class="left-area">
												<div class="icon">
														<i class="fas fa-wallet"></i>
												</div>
												<div class="price">
													<?php echo e(PriceHelper::showCurrencyPrice($hotel->main_price)); ?>

													<?php if($hotel->sale_price): ?>
													<small><del><?php echo e(PriceHelper::showCurrencyPrice($hotel->sale_price)); ?></del></small>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
						<?php echo e($hotels->appends(['minprice' => request()->input('minprice'), 'maxprice' => request()->input('maxprice'), 'country_id' => request()->input('country_id'), 'sort' => request()->input('sort'), 'review' => request()->input('review'),'view' => request()->input('view')])->links()); ?>

					</div>
					<?php else: ?>
						<h4 class="text-center"><?php echo e(__('Hotel Not Found')); ?></h4>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<form id="tour" class="d-none" action="<?php echo e(route('front.hotels')); ?>" method="GET">
		<input type="text" class="country" 	name="country_id" 	value="<?php echo e(request()->input('country_id') ? 	request()->input('country_id') : ''); ?>">
		<input type="text" class="review" 	name="review" 	value="<?php echo e(request()->input('review') ? 	request()->input('review') : ''); ?>">
		<button type="submit" id="search-tour"></button>
	</form>

	<input type="hidden" value="<?php echo e(request()->input('country_id')); ?>" id="country_id_ajax">
	<input type="hidden" value="<?php echo e(request()->input('review')); ?>" id="reviewajax">
	<input type="hidden" value="<?php echo e(request()->input('minPrice')); ?>" id="minPriceajax">
	<input type="hidden" value="<?php echo e(request()->input('maxPrice')); ?>" id="maxPriceajax">
	<input type="hidden" value="<?php echo e(request()->input('view')); ?>" id="viewajax">

</section>
<!-- sub-categori Area End -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('assets/front/js/hotel/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/hotel/index.blade.php ENDPATH**/ ?>