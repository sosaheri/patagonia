<?php $__env->startSection('title'); ?>
	<?php echo e(__('Tour Details')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php if($tour->meta_tag != null || $tour->meta_description != null): ?>
<?php $__env->startSection('meta_content'); ?>
<meta property="og:title" content="<?php echo e($tour->title); ?>" />
<meta property="og:description" content="<?php echo e($tour->meta_description != null ? $tour->meta_description : strip_tags($tour->meta_description)); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/images/tour/feature-image/'.$tour->image->image)); ?>" />
<meta name="keywords" content="<?php echo e($tour->meta_tag); ?>">
<meta name="description" content="<?php echo e($tour->meta_description); ?>">
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <!--Main-Menu Area Start-->

	<!-- Tour Details Banner Start -->
<section class="tour-details-banner" style="background:url(<?php echo e(asset('assets/images/tour/banner-image/'.$tour->banner_image)); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="content">
						<div class="left">
							<h4 class="title">
								<?php echo e($tour->title); ?>

							</h4>
						</div>
						<?php if($tour->video): ?>
						<div class="right-video">
							<a href="<?php echo e($tour->video); ?>" class="video-play-btn mf6 p-iframe">
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

    <section class="tour-top-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="info-content">
						<div class="review-box">
							<div class="rating">
								<?php echo e($tour->review()); ?> <small>/5</small>
							</div>
							<div class="review">
								<?php echo e($tour->review_count()); ?> <?php echo e(__('Review')); ?>

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
											<?php echo e(__('Duration')); ?>

										</h5>
										<p>
											<?php echo e($tour->duration); ?> <?php echo e(__('Days')); ?>

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
											<?php echo e(__('Tour Type')); ?>

										</h5>
										<p>
											<?php echo e($tour->category ? $tour->category->name : ''); ?>

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
											<?php echo e(__('Group Size')); ?>

										</h5>
										<p>
											<?php echo e($tour->tour_max_people); ?> <?php echo e(__('persons')); ?>

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
											<?php echo e($tour->country->country); ?>,<?php echo e($tour->state->state); ?>

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

	<!-- Single Details Area Start -->
	<section class="single-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="model-gallery-image">
						<div class="one-item-slider">
                            <?php $__currentLoopData = $tour->gallery->where('imagable_id',$tour->id)->where('type','tour'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item"><img src="<?php echo e(asset('assets/images/tour/gallery/'.$gallery->image)); ?>" alt="gallery-image"></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>

						<ul class="all-item-slider">
                            <?php $__currentLoopData = $tour->gallery->where('imagable_id',$tour->id)->where('type','tour'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><img src="<?php echo e(asset('assets/images/tour/gallery/'.$gel->image)); ?>" alt="gallery-image"></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="overview-area">
						<h4 class="title">
							<?php echo e(__('Overview')); ?> :
						</h4>
						<p>
						 <p><?php echo $tour->description; ?></p>
						</p>
					</div>

					<div class="map-location-area">
						<h4 class="title">
							<?php echo e(__("Tour's Location")); ?> : <?php echo e($tour->country->country); ?>,<?php echo e($tour->state->state); ?>,<?php echo e($tour->address); ?>

						</h4>
						<iframe
                            height="350"
                            frameborder="0" style="border:0; width: 100%;"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8&&q=<?php echo e($tour->country->country); ?>,<?php echo e($tour->state->state); ?>,<?php echo e($tour->address); ?>" allowfullscreen>
                          </iframe>
					</div>

					<?php if($tour->include && $tour->exclude): ?>
					<div class="map-location-area in-ex">
						<h4 class="title">
							<?php echo e(__('Included/Excluded')); ?> :
						</h4>
						<div class="row">
							<div class="col-md-6">
								<ul>
									<?php $__currentLoopData = explode(',,,',$tour->include); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($include); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<?php $__currentLoopData = explode(',,,',$tour->exclude); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exclude): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($exclude); ?></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div>
					</div>
					<?php endif; ?>

					<div class="map-location-area itinerary ">
						<?php if($tour->inventorys->count() >0): ?>
						<h4 class="title">
							<?php echo e(__('Itinerary')); ?> :
						</h4>
						<div class="row">
							<?php $__currentLoopData = $tour->inventorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-6  mb-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo e(asset('assets/images/tour/inventory-image/'.$inventory->image)); ?>" alt="Card image cap">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo e($inventory->title); ?></h5>
                                    <p class="card-text des mb-2"><?php echo e($inventory->description); ?></p>
                                    <p class="card-text"><?php echo e($inventory->content); ?></p>
                                    </div>
                                </div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<?php endif; ?>

						<?php
								$import = explode(',',implode(',',array_unique(explode(',',$tour->tour_attr_id))));
								 $combain = array_combine(explode(',',$tour->attr_term_id),explode(',',$tour->tour_attr_id));
								 $term = explode(',',$tour->attr_term_id);

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
                            $attr = App\Models\TourAttr::findOrFail($key);
                        ?>
                        <div class="row p-0 t-extra-f">
                            <div class="col-lg-12">
                                <h4 class="title">
                                    <?php echo e($attr->name); ?> :
                                </h4>
                            </div>
                            <div class="col-md-12">
                            <?php $__currentLoopData = $term_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $termName = App\Models\TourTerm::find($term)->name;
                            ?>

                                <p class="l"><i class="far fa-check-circle"></i><?php echo e($termName); ?></p>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			        </div>
                    <?php if($tour->faq_title): ?>
                    <div class="tour-faq-area">
                        <h4 class="title">
                            <?php echo e(__('FAQs')); ?>

                        </h4>
                        <div class="accordion" id="tour-faq">
                            <?php $__currentLoopData = explode(',,,',$tour->faq_title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $content = explode(',,,',$tour->faq_content);
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
                        <?php echo e(__('Average Review : ')); ?> <span class="average_review"><?php echo e($tour->review()); ?></span>
                        <ul class="review-list">
                            <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="r-not-found">
                                    <?php echo e(__('Review Not Found')); ?>

                                </p>

                            <?php endif; ?>
                        </ul>

                        <?php if(Auth::user() && App\Models\Order::where('user_id',Auth::user()->id)->where('item_id',$tour->id)->where('order_type','Tour')->exists()): ?>
                        <?php if(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$tour->id)->exists()): ?>
                        <input type="hidden" id="now_review" value="<?php echo e(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$tour->id)->first()->review); ?>">
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
                                <input type="hidden" name="type" value="tour">
                                <input type="hidden" name="review_id" value="<?php echo e($tour->id); ?>">
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
                            <?php if($tour->discount): ?>
                            <div class="discount">
                                <?php echo e($tour->discount); ?>%
                            </div>
                            <?php endif; ?>
                            <p class="price">
                            <?php echo e(PriceHelper::showCurrencyPrice($tour->main_price)); ?>

                            <?php if($tour->sale_price): ?>
                            <small><del><?php echo e(PriceHelper::showCurrencyPrice($tour->sale_price)); ?></del></small>
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
                                    <input type="text" class="date-range date_check select-date" name="date" value="" />
                                </div>
                                <?php if($tour->is_person == 1 && $tour->person_type_price): ?>
                                <?php $__currentLoopData = explode(',,,',$tour->person_type); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $person_price = explode(',,,',$tour->person_type_price)[$key];
                                    $person_max = explode(',,,',$tour->person_type_max)[$key];
                                    $person_min = explode(',,,',$tour->person_type_min)[$key];
                                ?>
                                <div class="people-count">
                                    <div class="left">
                                        <h5 class="title">
                                            <?php echo e($type); ?>

                                        </h5>
                                        (<small><?php echo e(__('Per Person Price')); ?> <?php echo e(PriceHelper::showCurrencyPrice($person_price)); ?></small>)
                                    </div>
                                    <div class="right">
                                        <div class="qty">
                                            <ul>
                                                <li>
                                                    <span class=" abcd children_qtymins reducing" rel="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::showPrice($person_price)); ?>" data-href="<?php echo e($person_min); ?>">
                                                        <i class="fas fa-minus"></i>
                                                    </span>
                                                </li>
                                                <li>
                                                <span id="<?php echo e($key); ?>" data-target="<?php echo e(PriceHelper::showPrice($person_price)); ?>" class="children_qty" data-href="<?php echo e($person_min); ?>"  data-price="<?php echo e($person_min * $person_price); ?>"><?php echo e($person_min); ?></span>
                                                </li>
                                                <li>
                                                    <span class=" abcd children_qtyplus adding" data-href="<?php echo e($person_max); ?>"  data-target="<?php echo e(PriceHelper::showPrice($person_price)); ?>" rel="<?php echo e($key); ?>">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <?php if($tour->is_extra_price == 1): ?>
                                <div class="extra-price-wizerd">
                                    <h5 class="title">
                                        <?php echo e(__('Extra prices')); ?>:
                                    </h5>
                                    <ul class="extra-list">
                                        <?php $__currentLoopData = explode(',,,',$tour->extra_price_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $extra_price_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $price = explode(',,,',$tour->extra_price);
                                            $type = explode(',,,',$tour->extra_price_type);
                                        ?>
                                        <li>
                                            <div class="left">
                                            <input type="checkbox" id="s<?php echo e($key+1); ?>" data-href="<?php echo e(PriceHelper::showPrice($price[$key])); ?>" class="tour_extra_prices" value="<?php echo e($key); ?>"> <label for="s<?php echo e($key+1); ?>"><?php echo e($extra_price_name); ?></label>
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
                                            <h4 class="total"><?php echo e(__('Total')); ?>:</h4>
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
                                if($tour->author_type == 'Admin'){
                                    $organizer =   App\Models\Admin::findOrFail(1);
                                }else{
                                    $organizer =	App\Models\User::findOrFail($tour->author_id);
                                }


                                ?>
                                <div class="left">
                                    <?php if($tour->author_type =='Admin'): ?>
                                    <img src="<?php echo e($organizer->photo ? asset('assets/images/admins/'.$organizer->photo) : asset('assets/images/noimage.png')); ?>" alt="image">
                                    <?php else: ?>
                                    <img src="<?php echo e($organizer->photo ? asset('assets/images/users/'.$organizer->photo) : asset('assets/images/noimage.png')); ?>" alt="image">
                                    <?php endif; ?>
                                </div>
                                <div class="right">
                                    <a href="#">
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

<input type="hidden" value="<?php echo e($tour->id); ?>" id="tourId">
<input type="hidden" value="<?php echo e($tour->duration); ?>" id="tourDoration">
<input type="hidden" value="<?php echo e($tour->tour_max_people); ?>" id="tourMaxPeapule">
<input type="hidden" value="<?php echo e(PriceHelper::showPrice($tour->main_price)); ?>" id="tourMainPrice">
<?php echo $__env->make('front.inc.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script src="<?php echo e(asset('assets/front/js/tour/details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/tour/details.blade.php ENDPATH**/ ?>