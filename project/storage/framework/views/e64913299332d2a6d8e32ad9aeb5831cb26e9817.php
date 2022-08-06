<?php $__env->startSection('title'); ?>
	<?php echo e(__('Hotel Details')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>


<?php if($hotel->meta_tag != null || $hotel->meta_description != null): ?>
<?php $__env->startSection('meta_content'); ?>
<meta property="og:title" content="<?php echo e($hotel->title); ?>" />
<meta property="og:description" content="<?php echo e($hotel->meta_description != null ? $hotel->meta_description : strip_tags($hotel->meta_description)); ?>" />
<meta property="og:image" content="<?php echo e(asset('assets/images/hotel-image/'.$hotel->image->image)); ?>" />
<meta name="keywords" content="<?php echo e($hotel->meta_tag); ?>">
<meta name="description" content="<?php echo e($hotel->meta_description); ?>">

<?php $__env->stopSection(); ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
	<!-- Tour Details Banner Start -->
    <section class="tour-details-banner" style="background: url(<?php echo e(asset('assets/images/hotel-image/banner-image/'.$hotel->banner_image)); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="left">
                            <h4 class="title">
                                <?php echo e($hotel->title); ?>

                            </h4>

                        </div>
                        <?php if($hotel->video): ?>
                        <div class="right-video">
                            <a href="<?php echo e($hotel->video); ?>" class="video-play-btn mfp-iframe">
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
                    <div class="info-content info-content-hotel">
                        <div class="review-box">
                            <div class="rating">
                                <?php echo e($hotel->review()); ?> <small>/5</small>
                            </div>
                            <div class="review">
                                <?php echo e($hotel->review_count()); ?> <?php echo e(__('Review')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Top info Area Start -->


    <!-- Single Details Area Start -->
    <section class="single-details hotel">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
					<?php if($hotel->gallery->count() > 0): ?>
                    <div class="model-gallery-image">
                        <div class="one-item-slider">
							<?php $__currentLoopData = $hotel->gallery->where('type','hotel')->where('imagable_id',$hotel->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item"><img src="<?php echo e(asset('assets/images/hotel-image/gallery/'.$gal_image->image)); ?>" alt="gallery-image"></div>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <ul class="all-item-slider">
							<?php $__currentLoopData = $hotel->gallery->where('type','hotel')->where('imagable_id',$hotel->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gal_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><img src="<?php echo e(asset('assets/images/hotel-image/gallery/'.$gal_image->image)); ?>" alt="gallery-image"></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
					</div>
					<?php endif; ?>
                    <div class="overview-area">
                        <h4 class="title">
                            <?php echo e(__('Overview')); ?> :
                        </h4>
                        <p><?php echo $hotel->description; ?></p>
                    </div>
                    <?php if($hotel->rooms->count() > 0): ?>
                    <div class="available-rooms">
                        <h4 class="title">
                            <?php echo e(__('Available Rooms')); ?> :
                        </h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="room-option">
                                    <div class="row">
                                        <div class="r-s-option col-lg-6 check-in">
                                            <p><?php echo e(__('Check In - Out')); ?></p>
                                            <input type="text" class="date-range date_range" name="daterange" value="" />
                                        </div>
                                        <div class="r-s-option col-lg-3 guests">
                                            <p><?php echo e(__('Guests')); ?></p>
                                            <div class="drop-down-select-guests">
                                                <div class="people-count">
                                                    <div class="left">
                                                        <h5 class="title">
                                                            <?php echo e(__('Adults')); ?>

                                                        </h5>
                                                    </div>
                                                    <div class="right">
                                                        <div class="qty">
                                                            <ul>
                                                                <li>
                                                                    <span class="qtymins reducing">
                                                                        <i class="fas fa-minus"></i>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="adultqty">0</span>
                                                                </li>
                                                                <li>
                                                                    <span class="qtyplus adding">
                                                                        <i class="fas fa-plus"></i>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="people-count">
                                                    <div class="left">
                                                        <h5 class="title">
                                                            <?php echo e(__('Children')); ?>

                                                        </h5>
                                                    </div>
                                                    <div class="right">
                                                        <div class="qty">
                                                            <ul>
                                                                <li>
                                                                    <span class="children_qtymins reducing">
                                                                        <i class="fas fa-minus"></i>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="children_qty">0</span>
                                                                </li>
                                                                <li>
                                                                    <span class="children_qtyplus adding">
                                                                        <i class="fas fa-plus"></i>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="r-s-option col-lg-3 check-availability">
                                            <a href="javascript:;" id="check_avalibabity">
                                                <?php echo e(__('Check Avalilabity')); ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="all-rooms" id="room_view_search">
                            <?php $__currentLoopData = $hotel->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-room">
                                <div class="image" data-toggle="modal" data-target="#staticBackdrop">
                                    <?php if(count($room->gallery->where('type','hotel_room')) > 0): ?>
                                    <img src="<?php echo e(asset('assets/images/hotel-image/room/'.$room->gallery->where('type','hotel_room')[0]->image)); ?>" alt="">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('assets/images/placeholder.jpg')); ?>" alt="">
                                    <?php endif; ?>

                                    <div class="count-gallery"><i class="fas fa-image"></i>
                                        <?php echo e(count($room->gallery->where('type','hotel_room')->where('imagable_id',$room->id))); ?>

                                    </div>
                                </div>
                                <div class="hotel-info">
                                    <h3 class="room-name"><?php echo e($room->room_name); ?></h3>
                                    <ul class="room-meta">
                                        <li>
                                            <div class="item">
                                                <i class="fas fa-compass"></i>
                                                <span><?php echo e($room->square_fit); ?> <?php echo e(__('sqft')); ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <i class="fas fa-bed"></i>
                                                <span>x<?php echo e($room->bed); ?> <?php echo e(__('bed')); ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item"><i class="fas fa-users"></i>
                                            <span>x <?php echo e($room->adult); ?> <?php echo e(__('Adult')); ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item"><i class="fas fa-child fa"></i>
                                                <span>x<?php echo e($room->children); ?> <?php echo e(__('Children')); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('Room Gallery')); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-gallery-image">
                                            <div class="model-slider">
                                                <?php $__currentLoopData = $room->gallery->where('type','hotel_room'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item"><img src="<?php echo e(asset('assets/images/hotel-image/room/'.$gallery->image)); ?>" alt=""></div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel_room_book_status">
                            <?php if($hotel->extra_price_name && $hotel->extra_price && $hotel->extra_price_type): ?>
                            <div class="row row_extra_service">
                                <div class="col-md-12">
                                    <div class="form-section-group"><label><?php echo e(__('Facilities')); ?>:</label>
                                        <div class="row">
                                            <?php $__currentLoopData = explode(',,,',$hotel->extra_price_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $extra_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $price = explode(',,,',$hotel->extra_price);
                                                $type = explode(',,,',$hotel->extra_price_type);
                                            ?>
                                            <div class="col-md-6 extra-item">
                                                <div class="extra-price-wrap d-flex justify-content-between">
                                                    <div class="flex-grow-1"><label><input type="checkbox" data-href="<?php echo e(PriceHelper::showPrice($price[$key])); ?>" class="extra_prices"  value="<?php echo e($key); ?>"> <?php echo e($extra_item); ?>

                                                        <div class="render">(<?php echo e($type[$key]); ?>)</div></label></div>
                                                    <div class="flex-shrink-0"><?php echo e(PriceHelper::showCurrency()); ?> <?php echo e(PriceHelper::showPrice($price[$key])); ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="row row_total_price">
                                <div class="col-md-6">
                                    <div class="extra-price-wrap d-flex justify-content-between">
                                        <div class="flex-grow-1"><label>
                                                <?php echo e(__('Total Room')); ?>:
                                            </label></div>
                                        <div class="flex-shrink-0 total_room">
                                            0
                                        </div>
                                    </div>
                                    <div class="extra-price-wrap d-flex justify-content-between">
                                        <div class="flex-grow-1"><label>
                                                <?php echo e(__('Service fee')); ?>

                                                 <i data-toggle="tooltip" data-placement="top" title=""
                                                    class="icofont-info-circle"
                                                    data-original-title="This helps us run our platform and offer services like 24/7 support on your trip."></i></label>
                                        </div>
                                        <div class="flex-shrink-0"><span><?php echo e(PriceHelper::showCurrency()); ?> </span> <span class="service_fee" data-href="<?php echo e(PriceHelper::showPrice($gs->hotel_service_fee)); ?>"><?php echo e(PriceHelper::showPrice($gs->hotel_service_fee)); ?></span>
                                        </div>
                                    </div>
                                    <div class="extra-price-wrap d-flex justify-content-between is_mobile">
                                        <div  class="flex-grow-1"><label>
                                                <?php echo e(__('Facilities')); ?>:
                                            </label></div>
                                        <div class="total-room-price"><span><?php echo e(PriceHelper::showCurrency()); ?> </span> <span class="facilities_price"> 0.00 </span></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="control-book">
                                        <div class="total-room-price"><span> <?php echo e(__('Total Price')); ?>:</span> <span><?php echo e(PriceHelper::showCurrency()); ?></span><span class="total_price">0.00</span>
                                        </div>
                                         <button type="button" class="mybtn1 book_button"><span><?php echo e(__('Book
                                                Now')); ?></span> <i class="fa fa-spinner fa-spin"
                                                style="display: none;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="map-location-area">
						<h4 class="title">
							<?php echo e(__("Tour's Location")); ?> :
						</h4>
						<iframe
                            height="350"
                            frameborder="0" style="border:0; width: 100%;"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8&q=<?php echo e($hotel->country->country); ?>,<?php echo e($hotel->state->state); ?>,<?php echo e($hotel->address); ?>" allowfullscreen>
                        </iframe>
                    </div>
                    <?php if($hotel->policy_title): ?>
                    <div class="tour-faq-area">
						<h4 class="title">
							<?php echo e(__('Policy')); ?>

						</h4>
						<div class="accordion" id="tour-faq">
                            <?php $__currentLoopData = explode(',,,',$hotel->policy_title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $policy_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $content = explode(',,,',$hotel->policy_content);
                            ?>
                            <div class="single-accordion">
                                <div class="accordion-header">
                                    <h4 class="title" data-toggle="collapse" data-target="#collapse<?php echo e($id); ?>" aria-expanded="true" aria-controls="collapseOne">
                                       <img src="<?php echo e(asset('assets/front/images/question.png')); ?>" alt=""><?php echo e($policy_title); ?>

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
                        <?php if(Auth::user() && App\Models\Order::where('user_id',Auth::user()->id)->where('item_id',$hotel->id)->where('order_type','Hotel')->exists()): ?>

						<?php if(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$hotel->id)->exists()): ?>
						<input type="hidden" id="now_review" value="<?php echo e(App\Models\Review::where('user_id',Auth::user()->id)->where('review_id',$hotel->id)->first()->review); ?>">
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
							<?php echo e(__('Average Review : ')); ?> <span class="average_review"><?php echo e($hotel->average_review); ?></span>
						</div>
						<div class="write-comment-area">
							<form action="<?php echo e(route('front.review.store')); ?>" method="POST" id="reviewForm">
								<?php echo csrf_field(); ?>
								<input type="hidden" name="review" id="reviewValue" value="">
								<input type="hidden" name="type" value="hotel">
								<input type="hidden" name="review_id" value="<?php echo e($hotel->id); ?>">
								<div class="row">
									<div class="col-lg-12">
										<textarea name="comment" placeholder="<?php echo e(__('Your ~Review')); ?> *"></textarea>
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

                        <?php
                        $import = explode(',',implode(',',array_unique(explode(',',$hotel->hotel_attr_id))));
                         $combain = array_combine(explode(',',$hotel->attr_term_id),explode(',',$hotel->hotel_attr_id));
                         $term = explode(',',$hotel->attr_term_id);

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
                            $attr = App\Models\HotelAttr::findOrFail($key);
                        ?>
                        <div class="facilities-wizerd">
                            <h4 class="title">
                                <?php echo e($attr->name); ?>

                            </h4>
                            <ul class="facilities-list">
                                <?php $__currentLoopData = $term_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $ter = App\Models\AttrTrem::find($term);
                                ?>
                                <li>
                                    <img width="40" src="<?php echo e(asset('assets/images/attr-term-image/'.$ter->image->image)); ?>" alt=""> <?php echo e($ter->name); ?>

                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <div class="organize-by">
                        <h4 class="title">
                                <?php echo e(__('Organized by')); ?>

                        </h4>
                        <div class="organizer-profile">
                            <?php
                            if($hotel->author_type == 'Admin'){
                                $organizer =   App\Models\Admin::findOrFail(1);
                            }else{
                                $organizer =	App\Models\User::findOrFail($hotel->author_id);
                            }

                            ?>
                            <div class="left">
                                <?php if($hotel->author_type =='Admin'): ?>
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

    <input type="hidden" id="showCurrency" value="<?php echo e(PriceHelper::showCurrency()); ?>">
    <input type="hidden" id="hotel_id_ajax" value="<?php echo e($hotel->id); ?>">
    <input type="hidden" id="hotel_search_ajax" value="<?php echo e(route('hotel.room.search')); ?>">
    <?php echo $__env->make('front.inc.related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Trending Tour Area End -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/front/js/hotel/details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/front/hotel/details.blade.php ENDPATH**/ ?>