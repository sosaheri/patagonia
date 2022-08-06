
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Car')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!--Main Breadcrumb Area Start -->
	<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						<?php echo e(__('Cars')); ?>

					</h1>
					<ul class="pages">
						<li>
							<a href="<?php echo e(route('front.index')); ?>">
								<?php echo e(__('Home')); ?>

							</a>
						</li>
						<li class="active">
							<a href="<?php echo e(route('front.cars')); ?>">
								<?php echo e(_('Cars')); ?>

							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--Main Breadcrumb Area End -->

	
	<section class="sub-categori">
		<div class="container">
			<div class="row check_position">
				<div class="ajax_loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->website_loader)); ?>) no-repeat scroll center center rgba(0,0,0,.6);"></div>
				<?php if ($__env->exists('front.inc.searching_sitebar')) echo $__env->make('front.inc.searching_sitebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="col-lg-9 order-first order-lg-last">
					<div class="right-area">
						<?php echo $__env->make('front.inc.filter_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php if($cars->count() > 0): ?>
						<div class="categori-item-area" id="car_ajax_load">
							<div class="row ">
									<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-lg-4 col-md-6">
										<div class="single-tours">
											<div class="img-area">
													<?php if($car->discount): ?>
													<div class="discount">
														<?php echo e($car->discount); ?>%
													</div>
													<?php endif; ?>
												<?php if($car->is_feature): ?>
												<div class="feature">
														<?php echo e(__('Featured')); ?>

												</div>
												<?php endif; ?>
												<img src="<?php echo e(asset('assets/images/car/feature-image/'.$car->image->image)); ?>" alt="tour-feature">
											</div>
											<div class="content">
												<span class="add-favotite corsor-pointer" data-href="<?php echo e(route('front.favarite',$car->id.',,tour')); ?>">
													<?php if(App\Models\Favarite::where('data_id',$car->id)->where('type','car')->exists()): ?>
														<i class="fas fa-check"></i>
													<?php else: ?>
													<i class="far fa-heart"></i>
													<?php endif; ?>
												</span>
												<p class="country">
													<i class="fas fa-plane"></i><?php echo e($car->country->country); ?>

												</p>
												<h4 class="title">
													<a href="<?php echo e(route('car.details',$car->slug)); ?>"><?php echo e($car->title); ?></a>
												</h4>
												<div class="review-area">
													<div class="stars">
														<div class="ratings">
															<div class="empty-stars"></div>
															<div class="full-stars" style="width:<?php echo e($car->review() * 20); ?>%"></div>
														  </div>
													</div>
													<span class="review">
														<?php echo e($car->review()); ?> <?php echo e(__('Review')); ?>

													</span>
												</div>
												<div class="price-area-wrapper">
													<div class="left-area">
														<div class="icon">
																<i class="fas fa-wallet"></i>
														</div>
														<div class="price">
															<?php echo e(PriceHelper::showCurrencyPrice($car->main_price)); ?>

															<?php if($car->sale_price): ?>
															<small><del><?php echo e(PriceHelper::showCurrencyPrice($car->sale_price)); ?></del></small>
															<?php endif; ?>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php echo e($cars->appends(['minprice' => request()->input('minprice'), 'maxprice' => request()->input('maxprice'), 'country_id' => request()->input('country_id'), 'sort' => request()->input('sort'), 'review' => request()->input('review'),'view' => request()->input('view')])->links()); ?>

						</div>
						<?php else: ?>
							<h4 class="text-center"><?php echo e(__('Car Not Found')); ?></h4>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- sub-categori Area End -->
	<form id="tour" class="d-none" action="<?php echo e(route('front.cars')); ?>" method="GET">
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
	<script src="<?php echo e(asset('assets/front/js/car/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/car/index.blade.php ENDPATH**/ ?>