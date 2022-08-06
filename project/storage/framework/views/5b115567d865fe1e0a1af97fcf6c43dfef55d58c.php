
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
       
        <li class="nav-item dropdown no-arrow mx-1"> 
            <a class="nav-link" href="<?php echo e(route('front.index')); ?>" target="_blank"> <i class="fas fa-globe-americas text-white"></i></a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1" id="notf_order"> 
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter" data-href="<?php echo e(route('notification-count')); ?>" id="order-notf-count"><?php echo e(App\Models\Notification::countNotification()); ?></span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="alertsDropdown">
            
                <div data-href="<?php echo e(route('order-notf-show')); ?>" id="order-notf-show">
                </div>
            </div>
        </li>
  
        
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              
                <img class="img-profile rounded-circle " src="<?php echo e(Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo) :  asset('assets/images/admins/man.png')); ?>" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Profile')); ?>

                </a>
            <a class="dropdown-item" href="<?php echo e(route('admin.password')); ?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Settings')); ?>

                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Logout')); ?>

                </a>
            </div>
        </li>
    </ul>
</nav>
<?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/patagonia/project/resources/views/admin/partials/topbar.blade.php ENDPATH**/ ?>