<?php $__env->startSection('title'); ?>
	<?php echo e(__('Space Details')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php if($space->meta_tag != null || $space->meta_description != null): ?>
<?php $__env->startSection('meta_content'); ?>
<meta property="og:title" content="<?php echo e($space->title); ?>" />
<meta property="og:description" content="<?php echo e($space->meta_description != null ? $space->meta_description : strip_tags($space->meta_description)); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/images/space/feature-image/'.$space->image->image)); ?>" />
<meta name="keywords" content="<?php echo e($space->meta_tag); ?>">
<meta name="description" content="<?php echo e($space->meta_description); ?>">

<?php $__env->stopSection(); ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
    <!-- Tour Details Banner Start -->
	<section class="tour-details-banner" style="background: url(<?php echo e(asset('assets/images/space/banner-image/'.$space->banner_image)); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content">
						<div class="left">
							<h4 class="title">
								<?php echo e($space->title); ?>

							</h4>
						</div>
						<?php if($space->video): ?>
						<div class="right-video">
							<a href="<?php echo e($space->video.'/aabadc'); ?>" class="video-play-btn mfp-iframe">
								<img src="<?php echo e(asset('assets/front/images/video-play-icon.png')); ?>" alt="">
							</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tour Details Banner End -->

	<!-- Tour Top info Area Start -->
	<section class="tour-top-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="info-content">
						<div class="review-box">
							<div class="rating">
								<?php echo e($space->review()); ?> <small>/5</small>
							</div>
							<div class="review">
								<?php echo e($space->review_count()); ?> <?php echo e(__('Review')); ?>

							</div>
						</div>
						<div class="row">
							<div class="col-xl-2 col-lg-6 col-sm-6">
								<div class="info-box">
									<div class="left">
										<img src="<?php echo e(asset('assets/front/images/icon/clock.png')); ?>" alt="">
									</div>
									<div class="right">
										<h5 class="title">
											<?php echo e(__('Bed')); ?>

										</h5>
										<p>
											<?php echo e($space->extra_bed); ?>

										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-sm-6">
								<div class="info-box">
									<div class="left">
										<img src="<?php echo e(asset('assets/front/images/icon/relax.png')); ?>" alt="">
									</div>
									<div class="right">
										<h5 class="title">
											<?php echo e(__('Bathroom')); ?>

										</h5>
										<p>
											<?php echo e($space->extra_bathroom); ?>

										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-sm-6">
								<div class="info-box">
									<div class="left">
										<img src="<?php echo e(asset('assets/front/images/icon/group.png')); ?>" alt="">
									</div>
									<div class="right">
										<h5 class="title">
											<?php echo e(__('Square')); ?>

										</h5>
										<p>
											<?php echo e($space->extra_square); ?> sqft
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="info-box">
									<div class="left">
										<img src="<?php echo e(asset('assets/front/images/icon/location.png')); ?>" alt="">
									</div>
									<div class="right">
										<h5 class="title">
											<?php echo e(__('Location')); ?>

										</h5>
										<p>
											<?php echo e($space->country->country); ?>,<?php echo e($space->state->state); ?>

										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tour Top info Area Start -->


	<!-- Single Details Area Start -->
	<section class="single-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">


					<?php if($space->gallery->count() > 0): ?>
						<div class="model-gallery-image">
							<div class="one-item-slider">
								<?php $__currentLoopData = $space->gallery->where('type','space')->where('imagable_id',$space->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="item"><img src="<?php echo e(asset('assets/images/space/gallery/'.$gal_image->image)); ?>" alt="gallery-image"></div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<ul class="all-item-slider">
								<?php $__currentLoopData = $space->gallery->where('type','space')->where('imagable_id',$space->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><img src="<?php echo e(asset('assets/images/space/gallery/'.$gal_image->image)); ?>" alt="gallery-image"></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</ul>
						</div>
					<?php endif; ?>
					<div class="overview-area">
						<h4 class="title">
							<?php echo e(__('Overview')); ?> :
						</h4>
                        <p>
							 <p><?php echo $space->description; ?>}</p>
						</p>

					</div>
                    <div class="map-location-area mt">
						<h4 class="main-title">
							<?php echo e(__('Space Facilities')); ?>

						</h4>
                        <?php
                            $import = explode(',',implode(',',array_unique(explode(',',$space->space_attr_id))));
                            $combain = array_combine(explode(',',$space->attr_term_id),explode(',',$space->space_attr_id));
                            $term = explode(',',$space->attr_term_id);

                            $data = array();

                            foreach ($import as $attr => $attrvalue) {
                                $row = array();
                                $i = 0;
                                foreach ($combain as $termkey => $termval) {
                                    if($attrvalue == $termval){
                                        $row[$i] = $termkey;
                                        $i++;
                                    }
                                }
                                $data[$attrvalue] = $row;
                            }
                        ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $term_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $attr = App\Models\SpaceAttr::findOrFail($key);
                        ?>
                        <div class="row t-extra-f">
                            <div class="col-lg-12">
                                <h4 class="title">
                                    <?php echo e($attr->name); ?> :
                                </h4>
                            </div>
                            <div class="col-md-12">
                                <?php $__currentLoopData = $term_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $termName = App\Models\SpaceTerm::find($term)->name;
                                ?>

                                    <p class="l"><i class="far fa-check-circle"></i><?php echo e($termName); ?></p>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
					<div class="map-location-area">
						<h4 class="title">
							<?php echo e(__('Space Location')); ?> : <?php echo e($space->country->country); ?>,<?php echo e($space->state->state); ?>,<?php echo e($space->address); ?>

						</h4>
						<iframe
                            height="350"
                            frameborder="0" style="border:0; width: 100%;"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8&q=<?php echo e($space->country->country); ?>,<?php echo e($space->state->state); ?>,<?php echo e($space->address); ?>" allowfullscreen>
                          </iframe>
					</div>

					<?php if($space->faq_title): ?>
					<div class="tour-faq-area">
						<h4 class="title">
							<?php echo e(__('FAQs')); ?>

						</h4>
                        <div class="accordion" id="tour-faq">
                            <?php $__currentLoopData = explode(',,,',$space->faq_title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $content = explode(',,,',$space->faq_content);
                            ?>
                            <div class="single-accordion">
                                <div class="accordion-header">
                                    <h4 class="title" data-toggle="collapse" data-target="#collapse<?php echo e($id); ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="<?php echo e(asset('assets/front/images/question.png')); ?>" alt=""><?php echo e($faq); ?>

                                    </h4>
                                </div>

                                <div id="collapse<?php echo e($id); ?>" class="collapse " data-parent="#tour-faq">
                                <div class="accordion-body">
                                    <?php echo e($content[$id]); ?>

                                </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
					</div>
					<?php endif; ?>
					

					<div class="review-area">
						<h4 class="title">
						<?php echo e(__('Review')); ?>

						</h4>
						<?php echo e(__('Average Review : ')); ?> <span class="average_review"><?php echo e($space->review()); ?></span>
						<ul class="review-list">
							<?php if($reviews->count()>0): ?>
							<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<div class="single-comment">
										<div class="left-area">
											<img src="<?php echo e($review->user->photo ? asset('assets/images/users/'.$review->user->photo) : asset('assets/images/noimage.png')); ?>" alt="">
											<h5 class="name"><?php echo e($review->user->name); ?></h5>
											<p class="date"><?php echo e($review->created_at->format('M-d-Y')); ?></p>
										</div>
										<div class="right-area">
											<div class="header-area">
												<div class="stars-area">
													<div class="stars">
														<div class="ratings">
															<div class="empty-stars"></div>
															<div class="full-stars" style="width:<?php echo e($review->review * 20); ?>%"></div>
														  </div>
													</div>
												</div>
											</div>
											<div class="comment-body">
												<p>
													<?php echo $review->comment; ?>

												</p>
											</div>
											<div class="comment-footer">
												<div class="links">
													<a href="#" class="report"><?php echo e(__('Report Abouse')); ?></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
									<li>
										<?php echo e(__('No Reviews')); ?>

									</li>
								<?php endif; ?>
						</ul>
						<?php if(Auth::user() && App\Models\Order::where('user_id',Auth::user()->id)->where('item_id',$space->id)->where('order_type','Space')->exists()): ?>
						<?php if(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$space->id)->exists()): ?>
						<input type="hidden" id="now_review" value="<?php echo e(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$space->id)->first()->review); ?>">
						<?php else: ?>
						<input type="hidden" id="now_review" value="0">
						<?php endif; ?>

						<div class="review-area">
							<h4 class="title"><?php echo e(__('Add Review & Rate')); ?></h4>
							<p class="text"><?php echo e(__('Your email address will not be published. Required fields are marked')); ?> *</p>
							<div class="star-area">
								<ul class="star-list">
									<li class="review-value review-1">
										<i class="fas fa-star" data="1"></i>
									</li>
									<li class="review-value review-2">
										<i class="fas fa-star" data="2"></i>
										<i class="fas fa-star" data="2"></i>
									</li>
									<li class="review-value review-3">
										<i class="fas fa-star" data="3"></i>
										<i class="fas fa-star" data="3"></i>
										<i class="fas fa-star" data="3"></i>
									</li>
									<li class="review-value review-4">
										<i class="fas fa-star" data="4"></i>
										<i class="fas fa-star" data="4"></i>
										<i class="fas fa-star" data="4"></i>
										<i class="fas fa-star" data="4"></i>
									</li>
									<li class="review-value review-5">
										<i class="fas fa-star" data="5"></i>
										<i class="fas fa-star" data="5"></i>
										<i class="fas fa-star" data="5"></i>
										<i class="fas fa-star" data="5"></i>
										<i class="fas fa-star" data="5"></i>
									</li>
								</ul>
							</div>

						</div>
						<div class="write-comment-area">
							<form action="<?php echo e(route('front.review.store')); ?>" method="POST" id="reviewForm">
								<?php echo csrf_field(); ?>
								<input type="hidden" name="review" id="reviewValue" value="">
								<input type="hidden" name="type" value="space">
								<input type="hidden" name="review_id" value="<?php echo e($space->id); ?>">
								<div class="row">
									<div class="col-lg-12">
										<textarea name="comment" placeholder="<?php echo e(__('Your Review')); ?> *"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<button class="mybtn1" type="submit"><?php echo e(__('Post Comment')); ?></button>
									</div>
								</div>
							</form>
						</div>
						<?php else: ?>
						<?php if(!Auth::user()): ?>
							<a class="mybtn1" href="<?php echo e(route('user.login')); ?>"><?php echo e(__('Login')); ?></a>
						<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="aside-right">
						<div class="price-area">
							<?php if($space->discount): ?>
							<div class="discount">
								<?php echo e($space->discount); ?>%
							</div>
							<?php endif; ?>
							<p class="price">
								<?php echo e(PriceHelper::showCurrencyPrice($space->main_price)); ?>

								<?php if($space->sale_price): ?>
								<small><del><?php echo e(PriceHelper::showCurrencyPrice($space->sale_price)); ?></del></small>
								<?php endif; ?>
							</p>
						</div>

							<div class="book-now-area">
								<h4 class="title">
									<?php echo e(__('Book A Reservation')); ?>

								</h4>
								<div class="start-time">
									<span>
										<?php echo e(__('Start Date')); ?> :
									</span>
									<input type="text" class="date-range date_range" placeholder="Check" name="daterange" value="" />
								</div>


                                <?php if($space->is_extra_price == 1): ?>
								<div class="extra-price-wizerd">
									<h5 class="title">
										<?php echo e(__('Extra prices')); ?>:
									</h5>
									<ul class="extra-list">
                                        <?php $__currentLoopData = explode(',,,',$space->extra_price_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $extra_price_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $price = explode(',,,',$space->extra_price);
                                            $type = explode(',,,',$space->extra_price_type);
                                        ?>
                                        <li>
											<div class="left">
                                            <input type="checkbox" id="<?php echo e($price[$key]); ?>" data-href="<?php echo e(PriceHelper::showPrice($price[$key])); ?>" class="space_extra_prices" value="<?php echo e($key); ?>"> <label for="<?php echo e($price[$key]); ?>"><?php echo e($extra_price_name); ?></label>
                                            <small class="mr-2">(<?php echo e(__('per ')); ?><?php echo e($type[$key]); ?>)</small>
											</div>
											<div class="right">
												<span><?php echo e(PriceHelper::showCurrency()); ?></span> <span class="extra_price"><?php echo e(PriceHelper::showPrice($price[$key])); ?></span>
											</div>
										</li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
                                </div>
								<?php endif; ?> <hr>
								<div class="date_show d-none">
									<li>
										<span><?php echo e(__('Start date')); ?>:</span>
										<span class="start_date_show"></span>
									</li>
									<li>
										<span><?php echo e(__('End date')); ?>:</span>
										<span class="end_date_show"></span>
									</li>
								</div>
								<div class="extra-price-wrap d-flex justify-content-between is_mobile mt-3">
									<div  class="flex-grow-1"><label>
											<h4><?php echo e(__('Total')); ?>:</h4>
										</label></div>
									<div class="total-room-price"><span><?php echo e(PriceHelper::showCurrency()); ?></span> <span class="total_price"> 0.00 </span></div>
								</div>
								<button type="button"  class="book-btn book_button"><?php echo e(__('Book Now')); ?></button>
							</div>

						<div class="organize-by">
							<h4 class="title">
									<?php echo e(__('Organized by')); ?>

							</h4>
							<div class="organizer-profile">
								<?php
								if($space->author_type == 'Admin'){
									$organizer =   App\Models\Admin::findOrFail(1);
								}else{
									$organizer =	App\Models\User::findOrFail($space->author_id);
								}

								?>
								<div class="left">
									<?php if($space->author_type =='Admin'): ?>
									<img src="<?php echo e($organizer->photo ? asset('assets/images/admins/'.$organizer->photo) : asset('assets/images/noimage.png')); ?>" alt="image">
									<?php else: ?>
									<img src="<?php echo e($organizer->photo ? asset('assets/images/users/'.$organizer->photo) : asset('assets/images/noimage.png')); ?>" alt="image">
									<?php endif; ?>
								</div>
								<div class="right">
									<a href="javascript:;">
										<h5 class="title">
											<?php echo e($organizer->name); ?>

										</h5>
									</a>
									<p class="date">
										<?php echo e(__('Member Since')); ?> <?php echo e($organizer->created_at->format('Y')); ?>

									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Single Details Area End -->

	<input type="hidden" value="<?php echo e(route('space.availability.check')); ?>" id="applyBtnUrl">
	<input type="hidden" value="<?php echo e($space->id); ?>" id="space_id_ajax">
	<input type="hidden" value="<?php echo e(PriceHelper::showPrice($space->main_price)); ?>" id="spaceUpPriceAjax">
	<?php echo $__env->make('front.inc.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/front/js/space/details.js')); ?>"></script>
<script>
	    $(".one-item-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".all-item-slider",
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            vertical: false,
            horizontal: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    $(".all-item-slider").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: ".one-item-slider",
      arrows: true,
      prevArrow: '<i class="fa fa fa-chevron-left slidPrv4"></i>',
      nextArrow: '<i class="fa fa-chevron-right slidNext4"></i>',
      dots: false,
      centerMode: false,
      centerPadding: "20px",
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            vertical: false,
            horizontal: true,
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        
      ],
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/space/details.blade.php ENDPATH**/ ?>