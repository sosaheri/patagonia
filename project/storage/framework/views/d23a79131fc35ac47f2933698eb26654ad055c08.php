

<?php $__env->startSection('styles'); ?>
  <link href="<?php echo e(asset('assets/user/css/login.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
	<?php echo e(__('Login')); ?> | <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container login-container">
  <div class="row justify-content-center login-padding-area">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card shadow-sm my-5">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4"><?php echo e(('Login')); ?></h1>
                </div>
                <form id="loginform" class="user" action="<?php echo e(route('user.login.submit')); ?>" method="POST"><?php echo csrf_field(); ?>
                  <?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="<?php echo e(__('Enter Email Address')); ?>">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="<?php echo e(__('Password')); ?>">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                      <input type="checkbox" name="remember" id="rp" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="rp">
                        <?php echo e(__('Remember Me')); ?></label>
                    </div>
                  </div>
                  <input id="authdata" type="hidden" value="<?php echo e(__('Authenticating...')); ?>">
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Login')); ?></button>
                  </div>
                </form>

                <div class="form-group text-center">
                    <p class="m-0"><small><?php echo e(__("Don't have an account?")); ?> <a href="<?php echo e(route('user-register-form')); ?>" class="text-primary"><?php echo e(__(" Sign Up ")); ?></a>  </small></p>
                    <p class="m-0"><small><?php echo e(__("Forgot Password")); ?> <a href="<?php echo e(route('user-forgot')); ?>" class="text-primary"><?php echo e(__("Click Here")); ?></a>  </small></p>
                </div>
                <div class="text-center login-areaa">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 offset-lg-3 offset-md-3">
                      <?php if(DB::table('socialsettings')->find(1)->f_check == 1 || DB::table('socialsettings')->find(1)->g_check == 1): ?>
                        <div class="social-area">
                          <ul class="social-links">
                            <?php if(DB::table('socialsettings')->find(1)->f_check == 1): ?>
                            <li>
                              <a href="<?php echo e(route('social-provider','facebook')); ?>" class="facebook">
                                <i class="fab fa-facebook-f"></i> <?php echo e(__('Facebook')); ?>

                              </a>
                            </li>
                            <?php endif; ?>
                            <?php if(DB::table('socialsettings')->find(1)->g_check == 1): ?>
                            <li>
                              <a href="<?php echo e(route('social-provider','google')); ?>" class="google">
                                <i class="fab fa-google-plus-g"></i> <?php echo e(__('Google')); ?>

                              </a>
                            </li>
                            <?php endif; ?>
                          </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
  'use strict';
  var mainurl = "<?php echo e(url('/')); ?>";
  var gs  = <?php echo json_encode($gs, 15, 512) ?>;
  var lang  = {
        'check': '<?php echo e(__('ADD NEW')); ?>',
        'sss': '<?php echo e(__('Success !')); ?>',
        'login' : '<?php echo e(__('Login')); ?>',
      };
</script>
    
<script src="<?php echo e(asset('assets/user/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/user/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/user/js/ruang-admin.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/user/js/myscript.js')); ?>"></script>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\new-don\booking-genius\project\resources\views/user/login.blade.php ENDPATH**/ ?>