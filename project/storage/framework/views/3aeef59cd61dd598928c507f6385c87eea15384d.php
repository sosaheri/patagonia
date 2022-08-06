
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hotel" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-hotel"></i>
    <span><?php echo e(__('Hotel')); ?></span>
        </a>
        <div id="hotel" class="collapse align-self-md-baseline
        <?php if( request()->is('admin/hotel') ): ?> show
        <?php elseif( request()->is('admin/room') ): ?> show
        <?php elseif( request()->is('admin/room/*') ): ?> show
        <?php elseif( request()->is('admin/hotel/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/hotel') ): ?> active
                <?php elseif( request()->is('admin/hotel/create') ): ?> active
                <?php elseif( request()->is('admin/hotel/edit/*') ): ?> active
                <?php elseif( request()->is('admin/hotel/room/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-hotel-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Hotel')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/room/attributes') ): ?> active
               
                <?php endif; ?>
                " href="<?php echo e(route('admin-roomattr-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Hotel Room Attribute')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/hotel/attribute') ): ?> active
                <?php elseif( request()->is('admin/hotel/attribute') ): ?> active
                <?php elseif( request()->is('admin/hotel/attribute/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-hotelattr-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Attributes')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/hotel/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-hotel-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/hotel/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-hotel-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tour" aria-expanded="true"
           aria-controls="collapseTable">
           <i class="fab fa-tripadvisor fa-2x"></i>
    <span><?php echo e(__('Tour')); ?></span>
        </a>
        <div id="tour" class="collapse 
        <?php if( request()->is('admin/tour') ): ?> show
        <?php elseif( request()->is('admin/tour/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/tour') ): ?> active
                <?php elseif( request()->is('admin/tour/create') ): ?> active
                <?php elseif( request()->is('admin/tour/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-tour-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Tour')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/tour/category') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-tour-cat-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Categorys')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/tour/attribute') ): ?> active
                <?php elseif( request()->is('admin/tour/attribute') ): ?> active
                <?php elseif( request()->is('admin/tour/attribute/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-tourattr-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Attributes')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/tour/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-tour-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/tour/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-tour-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#space" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-home"></i>
    <span><?php echo e(__('Space')); ?></span>
        </a>
        <div id="space" class="collapse 
        <?php if( request()->is('admin/space') ): ?> show
        <?php elseif( request()->is('admin/space/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/space') ): ?> active
                <?php elseif( request()->is('admin/space/create') ): ?> active
                <?php elseif( request()->is('admin/space/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-space-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Space')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/space/attribute') ): ?> active
                <?php elseif( request()->is('admin/space/attribute') ): ?> active
                <?php elseif( request()->is('admin/space/attribute/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-spaceattr-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Attributes')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/space/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-space-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/space/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-space-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#car" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-car"></i>
    <span><?php echo e(__('Car')); ?></span>
        </a>
        <div id="car" class="collapse 
        <?php if( request()->is('admin/car') ): ?> show
        <?php elseif( request()->is('admin/car/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/car') ): ?> active
                <?php elseif( request()->is('admin/car/create') ): ?> active
                <?php elseif( request()->is('admin/car/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-car-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Cars')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/car/attribute') ): ?> active
                <?php elseif( request()->is('admin/car/attribute') ): ?> active
                <?php elseif( request()->is('admin/car/attribute/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-carattr-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Attributes')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/car/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-car-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/car/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-car-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
               
            </div>
        </div>
    </li>

    <li class="nav-item 
    <?php if( request()->is('admin/cancel/booking') ): ?> active
    <?php elseif( request()->is('admin/cancel/*') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-order-cancel')); ?>">
            <i class="fas fa-fw fa-user-secret"></i>
            <span><?php echo e(__('Cancel Bookings')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ganeral-setting" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-cogs"></i>
            <span><?php echo e(__('General Settings')); ?></span>
        </a>
        <div id="ganeral-setting" class="collapse 
        <?php if( request()->is('admin/general-settings') ): ?> show
        <?php elseif( request()->is('admin/general-settings/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/logo') ): ?> active
            <?php elseif( request()->is('admin/general-settings/logo/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-logo')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Logo')); ?></a>
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/favicon') ): ?> active
            <?php elseif( request()->is('admin/general-settings/favicon/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-fav')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Favicon')); ?></a>
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/loader') ): ?> active
            <?php elseif( request()->is('admin/general-settings/loader/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-load')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Loader')); ?></a>
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/breadcumb') ): ?> active
            <?php elseif( request()->is('admin/general-settings/breadcumb/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-breadcumb')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Breadcumb Banner')); ?></a>
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/contents') ): ?> active
            <?php elseif( request()->is('admin/general-settings/contents/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-contents')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Website Content')); ?></a>
            
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/footer') ): ?> active
            <?php elseif( request()->is('admin/general-settings/footer/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-footer')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Footer')); ?></a>
            <a class="collapse-item 
            <?php if( request()->is('admin/general-settings/error') ): ?> active
            <?php elseif( request()->is('admin/general-settings/error/*') ): ?> active
            <?php endif; ?>
            " href="<?php echo e(route('admin-gs-error')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Error Page')); ?></a>
        </div>
        </div>
    </li>


    <li class="nav-item 
    <?php if( request()->is('admin/home-page/settings') ): ?> active
    <?php elseif( request()->is('admin/home-page/cutomize') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Home-setting" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-edit"></i>
            <span><?php echo e(__('Home Page Settings')); ?></span>
        </a>
        <div id="Home-setting" class="collapse 
        <?php if( request()->is('admin/slider') ): ?> show
        <?php elseif( request()->is('admin/member') ): ?> show
        <?php elseif( request()->is('admin/home-page/heading/cutomize') ): ?> show
        <?php elseif( request()->is('admin/member/background/edit') ): ?> show
        <?php elseif( request()->is('admin/home-page/cutomize') ): ?> show
        <?php endif; ?>
        
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/slider') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-slider-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Slider')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/member') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-member-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Members')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/member/background/edit') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-member-background-edit')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Members Background')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/home-page/heading/cutomize') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-section-heading')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Section Heading')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/home-page/cutomize') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-homepage-customize')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Home Page Customize')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payments" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-cogs"></i>
            <span><?php echo e(__('Payment Settings')); ?></span>
        </a>
        <div id="payments" class="collapse 
        <?php if( request()->is('admin/payment-informations') ): ?> show
        <?php elseif( request()->is('admin/paymentgateway') ): ?> show
        <?php elseif( request()->is('admin/currency') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/payment-informations') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-gs-payments')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Payment Information')); ?></a>
                <a class="collapse-item  
                <?php if( request()->is('admin/paymentgateway') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-payment-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Payment Gateways')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/currency') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-currency-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Currencies')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/withdraw/methods') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-withdraw-method-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Withdraw Methods')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item 
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
           <i class="fas fa-file-alt"></i>
            <span><?php echo e(__('Menu Page Settings')); ?></span>
        </a>
        <div id="collapsePage" class="collapse 
        <?php if( request()->is('admin/faq') ): ?> show
        <?php elseif( request()->is('admin/page-settings/contact') ): ?> show
        <?php elseif( request()->is('admin/page') ): ?> show
        <?php elseif( request()->is('admin/menu/customize') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/faq') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-faq-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('FAQ Page')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/page-settings/contact') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-ps-contact')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Contact Us Page')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/page') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-page-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Other Pages')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/menu/customize') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-menu-customize')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Menu Customize')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blog" aria-expanded="true"
           aria-controls="collapseTable">
           <i class="fas fa-blog"></i>
    <span><?php echo e(__('Blog')); ?></span>
        </a>
        <div id="blog" class="collapse 
        <?php if( request()->is('admin/blog') ): ?> show
        <?php elseif( request()->is('admin/blog/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                 <?php if( request()->is('admin/blog/category') ): ?> active
                    <?php endif; ?>
                    " href="<?php echo e(route('admin-cblog-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Blog Category')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/blog') ): ?> active
                    <?php elseif( request()->is('admin/blog/create') ): ?> active
                    <?php elseif( request()->is('admin/blog/edit/*') ): ?> active
                    <?php endif; ?>" href="<?php echo e(route('admin-blog-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Blog Post')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#email" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-envelope"></i>
            <span><?php echo e(__('Email Settings')); ?></span>
        </a>
        <div id="email" class="collapse 
        <?php if( request()->is('admin/email-config') ): ?> show
        <?php elseif( request()->is('admin/groupemail') ): ?> show
        <?php elseif( request()->is('admin/email-templates') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/email-templates') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-mail-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Email Template')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/email-config') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-mail-config')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Email Configurations')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/groupemail') ): ?> active
                <?php endif; ?> " href="<?php echo e(route('admin-group-show')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Group Email')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#social" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-paper-plane"></i>
    <span><?php echo e(__('Social Settings')); ?></span>
        </a>
        <div id="social" class="collapse 
        <?php if( request()->is('admin/social') ): ?> show
        <?php elseif( request()->is('admin/social/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/social') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-social-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Social Links')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/social/facebook') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-social-facebook')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Facebook Login')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/social/google') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-social-google')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Google Login')); ?></a>
                
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#location" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-map"></i>
            <span><?php echo e(__('Location')); ?></span>
        </a>
        <div id="location" class="collapse 
        <?php if( request()->is('admin/location/country') ): ?> show
        <?php elseif( request()->is('admin/country/country/*') ): ?> show
        <?php elseif( request()->is('admin/location/state') ): ?> show
        <?php elseif( request()->is('admin/location/state/*') ): ?> show
        <?php endif; ?>
        
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('admin/location/country') ): ?> active
                <?php elseif( request()->is('admin/location/country/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin.country.index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Country')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/location/state') ): ?> active
                <?php elseif( request()->is('admin/location/state/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin.state.index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('State')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#language" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Language')); ?></span>
        </a>
        <div id="language" class="collapse 
        <?php if( request()->is('admin/panel/languages') ): ?> show
        <?php elseif( request()->is('admin/panel/languages/*') ): ?> show
        <?php elseif( request()->is('admin/languages') ): ?> show
        <?php elseif( request()->is('admin/languages/*') ): ?> show
        <?php endif; ?>
        
        " aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item
                <?php if( request()->is('admin/panel/languages') ): ?> active
                <?php elseif( request()->is('admin/panel/languages/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('admin-lang-admin-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Admin Language')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('admin/languages') ): ?> active
                <?php elseif( request()->is('admin/languages/*') ): ?> active
                <?php endif; ?>
                
                " href="<?php echo e(route('admin-lang-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Website Language')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item 
    <?php if( request()->is('admin/module/review') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin.review.index')); ?>">
            <i class="fas fa-poll"></i>
            <span><?php echo e(__('Reviews')); ?></span>
        </a>
    </li>
    
    <li class="nav-item 
    <?php if( request()->is('admin/seotools/analytics') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-seotool-analytics')); ?>">
            <i class="fas fa-poll"></i>
            <span><?php echo e(__('Seo Tools')); ?></span>
        </a>
    </li>
   
    <li class="nav-item 
    <?php if( request()->is('admin/staff') ): ?> active
    <?php elseif( request()->is('admin/staff/*') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-staff-index')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span><?php echo e(__('Staff')); ?></span>
        </a>
    </li>

    <li class="nav-item
    <?php if( request()->is('admin/user') ): ?> active
    <?php elseif( request()->is('admin/user/*') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-user-index')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span><?php echo e(__('Manage User')); ?></span>
        </a>
    </li>



    <li class="nav-item 
    <?php if( request()->is('admin/role') ): ?> active
    <?php elseif( request()->is('admin/role/*') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-withdraw-index')); ?>">
            <i class="fas fa-fw fa-user-secret"></i>
            <span><?php echo e(__('Manage Withdraw')); ?></span>
        </a>
    </li>


    <li class="nav-item 
    <?php if( request()->is('admin/role') ): ?> active
    <?php elseif( request()->is('admin/role/*') ): ?> active
    <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-role-index')); ?>">
            <i class="fas fa-fw fa-user-secret"></i>
            <span><?php echo e(__('Role Manage')); ?></span>
        </a>
    </li>

    <li class="nav-item 
    <?php if( request()->is('admin/subscribers') ): ?> active
        <?php endif; ?>
    ">
        <a class="nav-link" href="<?php echo e(route('admin-subs-index')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__('Subscribers')); ?></span>
        </a>
    </li>
<?php /**PATH /opt/lampp/htdocs/patagonia/project/resources/views/admin/load/roles/super.blade.php ENDPATH**/ ?>