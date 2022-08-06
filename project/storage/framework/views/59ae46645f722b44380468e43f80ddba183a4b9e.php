<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('assets/images/genarel-settings/'.$gs->favicon)); ?> " rel="icon">
    
    <title><?php echo e($gs->website_title); ?></title>
<style>


</style>
    <?php if ($__env->exists('user.partials.style')) echo $__env->make('user.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>

</head>

<body id="page-top">
<div id="wrapper">


<?php if ($__env->exists('user.partials.sidebar')) echo $__env->make('user.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <?php if ($__env->exists('user.partials.topbar')) echo $__env->make('user.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container-fluid" id="container-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <?php if ($__env->exists('user.partials.footer')) echo $__env->make('user.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>


<div class="modal fade" id="complete_check" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Order Complete')); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center"><?php echo e(__('Are you sure?')); ?>.</p>
                <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                <a class="btn btn-success status_btn"><?php echo e(__('Complete')); ?></a>
            </div>
        </div>
    </div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<?php if ($__env->exists('user.partials.scripts')) echo $__env->make('user.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/layouts/user.blade.php ENDPATH**/ ?>