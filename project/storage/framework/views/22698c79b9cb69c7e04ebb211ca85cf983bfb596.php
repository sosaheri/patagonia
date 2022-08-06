
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->header_logo)); ?>" alt="" >
        </div>

      </a>

      <li class="nav-item <?php if( request()->is('user/dashboard') ): ?> active <?php endif; ?> ">
        <a class="nav-link" href="<?php echo e(route('user-dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo e(__('Dashboard')); ?></span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hotel" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-hotel"></i>
    <span><?php echo e(__('Hotel')); ?></span>
        </a>
        <div id="hotel" class="collapse 
        <?php if( request()->is('user/hotel') ): ?> show
        <?php elseif( request()->is('user/hotel/create') ): ?> show
        <?php elseif( request()->is('user/hotel/edit/*') ): ?> show
        <?php elseif( request()->is('user/room') ): ?> show
        <?php elseif( request()->is('user/room/*') ): ?> show
        <?php elseif( request()->is('user/hotel/orders/all') ): ?> show
        <?php elseif( request()->is('user/hotel/orders/pending') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('user/hotel') ): ?> active
                <?php elseif( request()->is('user/hotel/create') ): ?> active
                <?php elseif( request()->is('user/hotel/edit/*') ): ?> active
                <?php elseif( request()->is('user/hotel/room/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-hotel-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Hotel')); ?></a>
                <?php if(App\Helpers\Helper::hotelCheck() == true): ?>
                <a class="collapse-item  
                <?php if( request()->is('user/hotel/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-hotel-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/hotel/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-hotel-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
                <?php endif; ?>
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
        <?php if( request()->is('user/tour') ): ?> show
        <?php elseif( request()->is('user/tour/orders/all') ): ?> show
        <?php elseif( request()->is('user/tour/orders/pending') ): ?> show
        <?php elseif( request()->is('user/tour/edit/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('user/tour') ): ?> active
                <?php elseif( request()->is('user/tour/create') ): ?> active
                <?php elseif( request()->is('user/tour/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-tour-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Tour')); ?></a>
                <?php if(App\Helpers\Helper::tourCheck() == true): ?>
                <a class="collapse-item 
                <?php if( request()->is('user/tour/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-tour-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/tour/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-tour-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
                <?php endif; ?>
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
        <?php if( request()->is('user/space') ): ?> show
        <?php elseif( request()->is('user/space/orders/all') ): ?> show
        <?php elseif( request()->is('user/space/orders/pending') ): ?> show
        <?php elseif( request()->is('user/space/edit/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('user/space') ): ?> active
                <?php elseif( request()->is('user/space/create') ): ?> active
                <?php elseif( request()->is('user/space/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-space-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Spaces')); ?></a>
                <?php if(App\Helpers\Helper::spaceCheck() == true): ?>
                <a class="collapse-item 
                <?php if( request()->is('user/space/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-space-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/space/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-space-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
                <?php endif; ?>
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
        <?php if( request()->is('user/car') ): ?> show
        <?php elseif( request()->is('user/car/orders/all') ): ?> show
        <?php elseif( request()->is('user/car/orders/pending') ): ?> show
        <?php elseif( request()->is('user/car/edit/*') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('user/car') ): ?> active
                <?php elseif( request()->is('user/car/create') ): ?> active
                <?php elseif( request()->is('user/car/edit/*') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-car-index')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Cars')); ?></a>
                <?php if(App\Helpers\Helper::carCheck() == true): ?>
                <a class="collapse-item 
                <?php if( request()->is('user/car/orders/all') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-car-allorders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('All Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/car/orders/pending') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-car-pending.orders')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Pending Booking')); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#history" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-newspaper"></i>
    <span><?php echo e(__('Order History')); ?></span>
        </a>
        <div id="history" class="collapse 
        <?php if( request()->is('user/car/order/history') ): ?> show
        <?php elseif( request()->is('user/hotel/order/history') ): ?> show
        <?php elseif( request()->is('user/car/order/history') ): ?> show
        <?php elseif( request()->is('user/space/order/history') ): ?> show
        <?php elseif( request()->is('user/tour/order/history') ): ?> show
        <?php endif; ?>
        " aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item 
                <?php if( request()->is('user/car/order/history') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-order-history','car')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Cars Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/hotel/order/history') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-order-history','hotel')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Hotel Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/tour/order/history') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-order-history','tour')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Tour Booking')); ?></a>
                <a class="collapse-item 
                <?php if( request()->is('user/space/order/history') ): ?> active
                <?php endif; ?>
                " href="<?php echo e(route('user-order-history','space')); ?>"><i class="fas fa-angle-double-right"></i> <?php echo e(__('Space Booking')); ?></a>
            </div>
        </div>
    </li> 

    <li class="nav-item <?php if( request()->is('user/withdraws') ): ?> active <?php endif; ?> ">
        <a class="nav-link" href="<?php echo e(route('user-withdraw-index')); ?>">
            <i class="fas fa-money-bill"></i>
            <span><?php echo e(__('Withdraws')); ?></span></a>
    </li>
</ul>
<?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/user/partials/sidebar.blade.php ENDPATH**/ ?>