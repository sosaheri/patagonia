
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Home | ')); ?> <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($featured->count() > 0 && $ps->feature_section != 0): ?>

<div class="banner-active">
    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="single-banner bg_cover" style="background-image: url(<?php echo e(asset('assets/images/feature/'.$feature->photo)); ?>);">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="banner-content">
                            <h1 data-animation="fadeInLeft" data-delay="0.9s" class="title"><?php echo e($feature->title); ?></h1>
                            <p data-animation="fadeInLeft" data-delay="1.3s"><?php echo e($feature->details); ?></p>
                            <a data-animation="fadeInUp" data-delay="1.6s" class="mybtn1" href="<?php echo e($feature->button_link); ?>"><?php echo e($feature->button_name); ?> <i class="fal fa-long-arrow-right"></i></a>
                        </div> <!-- banner content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php endif; ?>
	<!-- Frature Area End -->
	<?php if($locations->count() > 0 && $ps->destinations_section == 1): ?>
	<!-- Top Dastination Area start -->
	<section class="top-dastination">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-area">
						<h4 class="title">
							<?php echo e($ps->destination_title); ?>

						</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-6">
					<div  class="single-destination">
						<img src="<?php echo e(asset('assets/images/location/country/'.$country->image->image)); ?>" alt="country-image">
						<div class="overlay"></div>
						<div class="content">
							<h4 class="title">
								<?php echo e($country->country); ?>

							</h4>
							<?php if(count($country->hotel) > 0): ?>
								<form  class="tour-count" action="<?php echo e(route('front.hotels')); ?>" method="get">
									<input type="hidden" name="country_id" value="<?php echo e($country->id); ?>">
									<button type="submit">(<?php echo e(count($country->hotel)); ?>) <?php echo e(__('Hotel')); ?></button>
								</form>
							<?php endif; ?>
							<?php if(count($country->tour) > 0): ?>
								<form  class="tour-count" action="<?php echo e(route('front.tours')); ?>" method="get">
									<input type="hidden" name="country_id" value="<?php echo e($country->id); ?>">
									<button type="submit">(<?php echo e(count($country->tour)); ?>) <?php echo e(__('TOUR')); ?></button>
								</form>
							<?php endif; ?>
							<?php if(count($country->car) > 0): ?>
								<form  class="tour-count" action="<?php echo e(route('front.cars')); ?>" method="get">
									<input type="hidden" name="country_id" value="<?php echo e($country->id); ?>">
									<button type="submit">(<?php echo e(count($country->car)); ?>) <?php echo e(__('Cars')); ?></button>
								</form>
							<?php endif; ?>


							<?php if(count($country->space) > 0): ?>
								<form  class="tour-count" action="<?php echo e(route('front.spaces')); ?>" method="get">
									<input type="hidden" name="country_id" value="<?php echo e($country->id); ?>">
									<button type="submit">(<?php echo e(count($country->space)); ?>) <?php echo e(__('Spaces')); ?></button>
								</form>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
	<?php if($tours->count() > 0 && $ps->tour_section == 1 && $ps->tour_menu == 1): ?>
	<section class="tranding-tour">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-area">
						<h4 class="title">
							<?php echo e($ps->tour_title); ?>

						</h4>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="tour-slider">
						<?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="slide-item">
							<div  class="single-tours">
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
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<?php if($hotels->count() > 0 && $ps->hotel_section == 1 && $ps->hotel_menu == 1): ?>
	<section class="tranding-tour">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-area">
						<h4 class="title">
							<?php echo e($ps->hotel_title); ?>

						</h4>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="tour-slider">
						<?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="slide-item">
							<div  class="single-tours">
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
									<img src="<?php echo e(asset('assets/images/hotel-image/'.$hotel->image->image)); ?>" alt="hotel-feature">
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
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if($cars->count() > 0 && $ps->car_section == 1 && $ps->car_menu == 1): ?>
	<section class="tranding-tour">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-area">
						<h4 class="title">
							<?php echo e($ps->car_title); ?>

						</h4>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="tour-slider">
						<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="slide-item">
							<div  class="single-tours">
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
									<img src="<?php echo e(asset('assets/images/car/feature-image/'.$car->image->image)); ?>" alt="hotel-feature">
								</div>
								<div class="content">
									<span class="add-favotite corsor-pointer" data-href="<?php echo e(route('front.favarite',$car->id.',,car')); ?>">
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
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if($spaces->count() > 0 && $ps->space_section == 1 && $ps->space_menu == 1): ?>

	<section class="tranding-tour">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-area">
						<h4 class="title">
							<?php echo e($ps->space_title); ?>

						</h4>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="tour-slider">
						<?php $__currentLoopData = $spaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $space): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="slide-item">
							<div  class="single-tours">
								<div class="img-area">
									<?php if($space->discount): ?>
									<div class="discount">
										<?php echo e($space->discount); ?>%
									</div>
									<?php endif; ?>
									
										<?php if($space->is_feature): ?>
										<div class="feature">
												<?php echo e(__('Featured')); ?>

										</div>
										<?php endif; ?>
								
									<img src="<?php echo e(asset('assets/images/space/feature-image/'.$space->image->image)); ?>" alt="hotel-feature">
								</div>
								<div class="content">
									<span class="add-favotite corsor-pointer" data-href="<?php echo e(route('front.favarite',$space->id.',,space')); ?>">
										<?php if(App\Models\Favarite::where('data_id',$space->id)->where('type','space')->exists()): ?>
											<i class="fas fa-check"></i>
										<?php else: ?>
										<i class="far fa-heart"></i>
										<?php endif; ?>
									</span>
									<p class="country">
											<i class="fas fa-plane"></i><?php echo e($space->country->country); ?>

									</p>
									<h4 class="title">
										<a href="<?php echo e(route('space.details',$space->slug)); ?>"><?php echo e($space->title); ?></a>
									</h4>
									<div class="review-area">
										<div class="stars">
											<div class="ratings">
												<div class="empty-stars"></div>
												<div class="full-stars" style="width:<?php echo e($space->review() * 20); ?>%"></div>
											  </div>
										</div>
										<span class="review">
											<?php echo e($space->review()); ?> <?php echo e(__('Review')); ?>

										</span>
									</div>
									<div class="price-area-wrapper">
										<div class="left-area">
											<div class="icon">
													<i class="fas fa-wallet"></i>
											</div>
											<div class="price">
												<?php echo e(PriceHelper::showCurrencyPrice($space->main_price)); ?>

												<?php if($space->sale_price ): ?>
												<small><del><?php echo e(PriceHelper::showCurrencyPrice($space->sale_price)); ?></del></small>
												<?php endif; ?>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>
<?php if($members->count() > 0  && $ps->member_section == 1 ): ?>
	<section class="testimonial" style="background: url(<?php echo e(asset('assets/images/page-setting/'.$ps->member_background)); ?>)">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-heading text-center">
						<h2 class="title">
							<?php echo e($ps->member_title); ?>

						</h2>
						<p class="text">
							<?php echo e($ps->member_text); ?>

						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider">
						<?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="single-testimonial">
							<div class="review-text">
								<p>
									<?php echo e($member->message); ?>

								</p>
								<img src="<?php echo e(asset('assets/front/images/quot.png')); ?>" alt="">
							</div>
							<div class="people">
								<div class="img">
										<img src="<?php echo e(asset('assets/images/member/'.$member->photo)); ?>" alt="">
								</div>
								<div class="content">
								<h4 class="title"><?php echo e($member->name); ?></h4>
								<p class="designation"><?php echo e(substr(strip_tags($member->designation),0, 200)); ?></p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Area End -->
	<?php endif; ?>

	<?php if($blogs->count() > 0 && $ps->blog_section == 1 && $ps->blog_menu == 1): ?>
	<!-- Blog Area Start -->
	<section class="blog">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-heading text-center">
						<h2 class="title">
							<?php echo e($ps->blog_title); ?>

						</h2>
						<p class="text">
							<?php echo e($ps->blog_text); ?>

						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
					<a href="<?php echo e(route('front.blog.show',$blog->slug)); ?>" class="single-blog">
						<div class="img">
							<img src="<?php echo e(asset('assets/images/blogs/'.$blog->image->image)); ?>" alt="">
						</div>
						<div class="content">
							<span>
								<h4 class="title">
									<?php echo e($blog->title); ?>

								</h4>
							</span>
							<div class="text">
								<p>
									<?php echo e(substr(strip_tags($blog->description),0, 100)); ?>...
								</p>
							</div>

							<ul class="top-meta">
									<li>
										<span>
												<i class="far fa-clock"></i><?php echo e(Carbon\Carbon::parse($blog->created_at)->diffForHumans()); ?>

										</span>
									</li>
								</ul>
						</div>
					</a>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="<?php echo e(route('front.blog')); ?>" class="view-all-btn"><?php echo e(__('View All')); ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Area End -->
	<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/index.blade.php ENDPATH**/ ?>