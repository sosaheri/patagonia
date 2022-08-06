
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Tour')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!--Main Breadcrumb Area Start -->
	<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						<?php echo e(__('All Tours')); ?>

					</h1>
					<ul class="pages">
						<li>
							<a href="<?php echo e(route('front.index')); ?>">
								<?php echo e(__('Home')); ?>

							</a>
						</li>
						<li class="active">
							<a href="<?php echo e(route('front.tours')); ?>">
								<?php echo e(__('Tours')); ?>

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
						<?php if($tours->count() > 0): ?>
						<div class="categori-item-area" id="tour_ajax_load">
							<div class="row">
									<?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-4 col-md-6">
										<div class="single-tours">
											<div class="img-area">
												<?php if($tour->discount): ?>
												<div class="discount">
													<?php echo e($tour->discount); ?>%
												</div>
												<?php endif; ?>
												<?php if($tour->is_feature): ?>
												<div class="feature">
														<?php echo e(__('Featured')); ?>

												</div>
												<?php endif; ?>
												<img src="<?php echo e(asset('assets/images/tour/feature-image/'.$tour->image->image)); ?>" alt="tour-feature">
											</div>
											<div class="content">
												<span class="add-favotite corsor-pointer" data-href="<?php echo e(route('front.favarite',$tour->id.',,tour')); ?>">
													<?php if(App\Models\Favarite::where('data_id',$tour->id)->where('type','tour')->exists()): ?>
														<i class="fas fa-check"></i>
													<?php else: ?>
													<i class="far fa-heart"></i>
													<?php endif; ?>
												</span>
												<p class="country">
													<i class="fas fa-plane"></i><?php echo e($tour->country->country); ?>

												</p>
												<h4 class="title">
													<a href="<?php echo e(route('tour.details',$tour->slug)); ?>"><?php echo e($tour->title); ?></a>
												</h4>
												<div class="review-area">
													<div class="stars">
														<div class="ratings">
															<div class="empty-stars"></div>
															<div class="full-stars" style="width:<?php echo e($tour->review() * 20); ?>%"></div>
														  </div>
													</div>
													<span class="review">
														<?php echo e($tour->review()); ?> <?php echo e(__('Review')); ?>

													</span>
												</div>
												<div class="price-area-wrapper">
													<div class="left-area">
														<div class="icon">
																<i class="fas fa-wallet"></i>
														</div>
														<div class="price">
															<?php echo e(PriceHelper::showCurrencyPrice($tour->main_price)); ?>

															<?php if($tour->sale_price): ?>
															 <small><del><?php echo e(PriceHelper::showCurrencyPrice($tour->sale_price)); ?></del></small>
															 <?php endif; ?>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php echo e($tours->appends(['minprice' => request()->input('minprice'), 'maxprice' => request()->input('maxprice'), 'country_id' => request()->input('country_id'), 'sort' => request()->input('sort'), 'review' => request()->input('review'),'view' => request()->input('view')])->links()); ?>

						</div>
						<?php else: ?>
							<h4 class="text-center"><?php echo e(__('Tour Not Found')); ?></h4>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- sub-categori Area End -->

	<form id="tour" class="d-none" action="<?php echo e(route('front.tours')); ?>" method="GET">
		<input type="text" class="country" 	name="country_id" 	value="<?php echo e(request()->input('country_id') ? 	request()->input('country_id') : ''); ?>">
		<input type="text" class="review" 	name="review" 	value="<?php echo e(request()->input('review') ? 	request()->input('review') : ''); ?>">
		<button type="submit" id="search-tour"></button>
	</form>

	<input type="hidden" value="<?php echo e(request()->input('country_id')); ?>" id="country_id_ajax">
	<input type="hidden" value="<?php echo e(request()->input('review')); ?>" id="reviewajax">
	<input type="hidden" value="<?php echo e(request()->input('minPrice')); ?>" id="minPriceajax">
	<input type="hidden" value="<?php echo e(request()->input('maxPrice')); ?>" id="maxPriceajax">
	<input type="hidden" value="<?php echo e(request()->input('view')); ?>" id="viewajax">


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('assets/front/js/tour/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/tour/index.blade.php ENDPATH**/ ?>