

<?php $__env->startSection('title'); ?>
	<?php echo e(__('Contact Us | ')); ?> <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Main Breadcrumb Area Start -->
	<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pagetitle">
							<?php echo e(__('Contact Us')); ?>

						</h1>
						<ul class="pages">
							<li>
							<a href="<?php echo e(route('front.index')); ?>">
									<?php echo e(__('Home')); ?>

								</a>
							</li>
							<li class="active">
							<a href="<?php echo e(route('front.contact')); ?>">
									<?php echo e(__('Contact Us')); ?>

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--Main Breadcrumb Area End -->


	<!-- Contact Us Area Start -->
	<section class="contact-us">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="header-area">
						<h4 class="title">
								<?php if($ps->contact_title): ?>
								<?php echo e($ps->contact_title); ?>

								<?php endif; ?>
						</h4>
						<?php if($ps->contact_subtitle): ?>
						<p class="text"><?php echo e($ps->contact_subtitle); ?></p>
						<?php endif; ?>
					
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-lg-7">
					<div class="left-area">
						<div class="contact-form">
							<form action="<?php echo e(route('front.contact.submit')); ?>" id="contactform" method="POST">
                                <?php echo csrf_field(); ?> <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<ul>
									<li>
										<input type="text" class="input-field" required placeholder="<?php echo e(__('Enter Name')); ?>" name="name">
									</li>
									<li>
										<input type="email" class="input-field" required placeholder="<?php echo e(__('Email Address')); ?>" name="email">
									</li>
									<li>
										<input type="text" class="input-field" required placeholder="<?php echo e(__('Email Phone')); ?>" name="phone">
									</li>
									
									<li>
										<textarea class="input-field textarea" name="message" required placeholder="<?php echo e(__('Your Message')); ?>"></textarea>
									</li>
								</ul>
								<ul class="captcha-area">
									<li>
										<p><img class="codeimg" src="<?php echo e(asset('assets/images/capcha_code.png')); ?>" alt="code"><i data-href="<?php echo e(url('contact/refresh_code')); ?>" class="fas fa-sync-alt pointer refresh_code "></i></p>
									</li>
									<li>
										<input type="text" class="input-field" name="codes" placeholder="<?php echo e(__('Enter Code')); ?>">
									</li>
								</ul>
                                <button class="submit-btn mybtn1" type="submit"><?php echo e(__('Send Message')); ?> 
                                    <span class="spinner-grow spinner-grow-sm d-none" style="padding:10px" role="status"></span>
                                </button>
                                <input type="hidden" value="<?php echo e($ps->contact_email); ?>" name="to">
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="right-area">
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="<?php echo e(asset('assets/front/images/emal.png')); ?>" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="title">
										<?php echo e(__('Email')); ?>

									</h4>
                                    <a href="javascript:;">
										<?php echo e($ps->contact_email); ?>

									</a>
									
							</div>
						</div>
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="<?php echo e(asset('assets/front/images/location.png')); ?>" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="title">
										<?php echo e(__('Location')); ?> 
									</h4>
                                    <a href="javascript:;">
										<?php echo e($ps->street_address); ?>

									</a>
									
							</div>
						</div>
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="<?php echo e(asset('assets/front/images/call.png')); ?>" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="title">
										<?php echo e(__('Phone')); ?>

									</h4>
										<a href="javascript:;">
												<?php echo e($ps->contact_number); ?>

										</a>
										
							</div>
						</div>
						<div class="social-links">
							<h4 class="title"><?php echo e(__('Find us here')); ?> :</h4>
							<ul>
                                <?php
                                $social_link = App\Models\Socialsetting::find(1);
                            ?>
                            <?php if($social_link->f_status == 1): ?>
                            <li>
                                <a href="<?php echo e($social_link->facebook); ?>" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li> 
                            <?php endif; ?>
                            <?php if($social_link->t_status == 1): ?>
                            <li>
                                <a href="<?php echo e($social_link->twitter); ?>" class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($social_link->l_status == 1): ?>
                            <li>
                                <a href="<?php echo e($social_link->linkedin); ?>" class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if($social_link->g_status == 1): ?>
                            <li>
                                <a href="<?php echo e($social_link->gplus); ?>" class="google-plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
							<?php endif; ?>
							<?php if($social_link->d_status == 1): ?>
                                <li>
									<a href="<?php echo e($social_link->dribble); ?>" class="google-plus">
										<i class="fab fa-dribbble"></i>
									</a>
								</li>
								<?php endif; ?>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Us Area End-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <script>
    
    $.get($(this).data('href'), function (data, status) {
      $('.codeimg').attr("src", "" + mainurl + "/assets/images/capcha_code.png?time=" + Math.random());
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/contact.blade.php ENDPATH**/ ?>