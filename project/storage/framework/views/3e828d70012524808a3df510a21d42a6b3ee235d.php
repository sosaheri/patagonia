<?php if($related_data->count() > 0): ?>
<?php if($data_type == 'tour'): ?>
	<!-- Trending Tour Area Start -->
	<section class="tranding-tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-area">
                        <h4 class="title">
                                <?php echo e(__('Related Tours')); ?>

                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tour-slider">
                        <?php $__currentLoopData = $related_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <div class="right-area">
                                            <div class="time-counter">
                                                    <div data-countdown="2020/05/01"></div>
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
<?php if($data_type == 'car'): ?>
	<!-- Trending Tour Area Start -->
	<section class="tranding-tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-area">
                        <h4 class="title">
                                <?php echo e(__('Related Cars')); ?>

                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tour-slider">
                        <?php $__currentLoopData = $related_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide-item">
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
                                        <div class="right-area">
                                            <div class="time-counter">
                                                    <div data-countdown="2020/05/01"></div>
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
<?php if($data_type == 'space'): ?>
	<!-- Trending Tour Area Start -->
	<section class="tranding-tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-area">
                        <h4 class="title">
                                <?php echo e(__('Related Space')); ?>

                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tour-slider">
                        <?php $__currentLoopData = $related_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $space): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide-item">
                            <div class="single-tours">
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
                                    <img src="<?php echo e(asset('assets/images/space/feature-image/'.$space->image->image)); ?>" alt="tour-feature">
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

                                                <?php if($space->sale_price): ?>
                                                 <small><del><?php echo e(PriceHelper::showCurrencyPrice($space->sale_price)); ?></del></small>
                                                 <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="time-counter">
                                                    <div data-countdown="2020/05/01"></div>
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
<?php if($data_type == 'hotel'): ?>
	<!-- Trending Tour Area Start -->
	<section class="tranding-tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-area">
                        <h4 class="title">
                                <?php echo e(__('Related Hotels')); ?>

                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tour-slider">
                        <?php $__currentLoopData = $related_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide-item">
                            <div class="single-tours">
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
                                    <img src="<?php echo e(asset('assets/images/hotel-image/'.$hotel->image->image)); ?>" alt="tour-feature">
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
                                        <div class="right-area">
                                            <div class="time-counter">
                                                    <div data-countdown="2020/05/01"></div>
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
<?php endif; ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/inc/related.blade.php ENDPATH**/ ?>