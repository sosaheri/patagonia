<div class="col-lg-3 col-md-6">
    <div class="left-area">
        <div class="filter-result-area mt-0">
        <div class="header-area">
            <h4 class="title">
                <?php echo e(__('Filter By Price')); ?>

            </h4>
        </div>
        <div class="body-area">
            <div class="price-range-block">
                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                <div class="livecount">
                    <?php echo e(PriceHelper::showCurrency()); ?>

                    <input type="number" min=0 max="<?php echo e(PriceHelper::showPrice($max_price)); ?>" id="min_price" value="0" class="price-range-field" /> 
                    <span><?php echo e(__('To')); ?> </span>
                    <?php echo e(PriceHelper::showCurrency()); ?> <input type="number" min=0 max="<?php echo e(PriceHelper::showPrice($max_price)); ?>" value="<?php echo e(PriceHelper::showPrice($max_price)); ?>" id="max_price" class="price-range-field" />
                </div>
            </div>
            <button class="filter-btn" id="min_max_price_sort" type="button"><?php echo e(__('Search')); ?></button>
        </div>
        </div>
        <div class="filter-result-area">
            <div class="header-area">
                <h4 class="title">
                    <?php echo e(__('Filter Results Country')); ?>

                </h4>
            </div>
            <div class="body-area">
                    <ul class="filter-list">
                        <li>
                            <div class="content">
                            <a href="javascript:;" data-href="" class="category-link ajax_country <?php echo e(request()->input('country_id') == '' ? 'active' : ''); ?>"> <i class="fas fa-angle-double-right"></i> <?php echo e(__('All')); ?></a>
                            </div>
                        </li>
                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="content">
                            <a href="javascript:;" data-href="<?php echo e($country->id); ?>" class="category-link ajax_country <?php echo e(request()->input('country_id') == $country->id ? 'active' : ''); ?>"> <i class="fas fa-angle-double-right"></i> <?php echo e($country->country); ?></a>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
            </div>
        </div>
        
        <div class="design-area">
            <div class="header-area">
                    <h4 class="title">
                            <?php echo e(__('Filter By Review')); ?>

                    </h4>
                </div>
                <div class="body-area">
                        <ul class="filter-list">
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="review" id="r0" <?php echo e(request()->input('review') == '' ? 'checked' : ''); ?> value="">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r0">
                                                        <?php echo e(__('All')); ?>

                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php echo e(request()->input('review') == 5 ? 'checked' : ''); ?> name="review" id="r1" value="5">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r1">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="review" id="r2" <?php echo e(request()->input('review') == 4 ? 'checked' : ''); ?> value="4">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r2">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="review" id="r3" <?php echo e(request()->input('review') == 3 ? 'checked' : ''); ?> value="3">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r3">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="review" id="r4" <?php echo e(request()->input('review') == 2 ? 'checked' : ''); ?> value="2">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r4">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                        <div class="check-box">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="review" <?php echo e(request()->input('review') == 1 ? 'checked' : ''); ?> id="r5" value="1">
                                                    <span class="checkmark"></span>
                                                    <label class="form-check-label review_ajax_call" for="r5">
                                                        <i class="fas fa-star"></i>
                                                    </label>
                                                </div>
                                        </div>
                                </div>
                            </li>
                        </ul>
                </div>
    </div>



    </div>
</div><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/inc/searching_sitebar.blade.php ENDPATH**/ ?>