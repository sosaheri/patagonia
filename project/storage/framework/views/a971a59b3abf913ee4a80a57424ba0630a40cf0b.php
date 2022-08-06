<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->header_logo)); ?>" alt="" >
        </div>

      </a>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span><?php echo e(__('Dashboard')); ?></span></a>
      </li>

      <?php if(Auth::guard('admin')->user()->role == 0): ?>
        <?php echo $__env->make('admin.load.roles.super', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php echo $__env->make('admin.load.roles.normal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
</ul><?php /**PATH /opt/lampp/htdocs/patagonia/project/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>