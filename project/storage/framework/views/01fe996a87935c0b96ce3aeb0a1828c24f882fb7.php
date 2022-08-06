
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php echo $__env->yieldContent('meta_content'); ?>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $__env->yieldContent('title'); ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo e(asset('assets/images/genarel-settings/'.$gs->favicon)); ?>" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/bootstrap.min.css')); ?>">
	<!-- Plugin css -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/plugin.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/pignose.calender.css')); ?>">
	<!-- stylesheet -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/style.css')); ?>">
	<!-- responsive -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
	<?php echo $__env->yieldContent('styles'); ?>

    <?php if($site_lang->rtl == 1): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/rtl.css')); ?>">
    <?php endif; ?>

	<?php if(!empty($seo->google_analytics)): ?>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
				dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', '<?php echo e($seo->google_analytics); ?>');
	</script>
	<?php endif; ?>

	<?php if(!empty($seo->facebook_pixel)): ?>
	    <script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?php echo e($seo->facebook_pixel); ?>');
			fbq('track', 'PageView');
		  </script>
		  <noscript>
			<img height="1" width="1" style="display:none"
				 src="https://www.facebook.com/tr?id=<?php echo e($seo->facebook_pixel); ?>&ev=PageView&noscript=1"/>
		  </noscript>
	<?php endif; ?>

</head>

<body>



<!-- preloader area start -->
	<?php if($gs->is_website_loader == 1): ?>
		<div class="preloader" id="preloader">
			<img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->website_loader)); ?>" alt="">
		</div>
	<?php endif; ?>
<!-- preloader area end -->

	<!--Main-Menu Area Start-->
	<div class="mainmenu-area">
		<!-- Top Header Area Start -->
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="left-content">
								
								<div class="language-selector">
									<select name="language" class="language" id="language_setup" data-target="<?php echo e(route('front.language.setup')); ?>">
										<?php $__currentLoopData = App\Models\Language::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($language->id); ?>" <?php echo e(Session::has('language') && Session::get('language') == $language->id     ? 'selected' : ''); ?>  ><?php echo e($language->language); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
								
                                
								<?php if($gs->is_currency != 0): ?>
                                <div class="language-selector">
                                    <select name="currency"  class="language" id="currency_setup" data-target="<?php echo e(route('front.currency.setup')); ?>">
                                        <?php $__currentLoopData = App\Models\Currency::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($currency->id); ?>" <?php echo e(Session::has('currency') && Session::get('currency') == $currency->id  ? 'selected' : (!Session::has('currency') && $currency->is_default == 1 ? 'selected' : '')); ?> ><?php echo e($currency->sign. ' '.$currency->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
								<?php endif; ?>
							</div>
                            <div class="right-content">
                                <ul class="social-link">
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
                                </ul>
                                <div class="user-top-menu-area">
                                    <?php if(Auth::user()): ?>
                                        <div class="user-d-d">
                                            <a href="#" class="u-name">
                                                <i class="fas fa-user"></i><?php echo e(Auth::user()->name); ?>

                                            </a>
                                            <div class="user-d-d-menu">
                                                <a href="<?php echo e(route('user-dashboard')); ?>"><i class="fas fa-tachometer-alt"></i><?php echo e(__('Dashboard')); ?></a>
                                                <a href="<?php echo e(route('user-logout')); ?>"><i class="fas fa-sign-out-alt"></i><?php echo e(__('Logout')); ?></a>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="login-button">
                                            <a href="<?php echo e(route('user.login')); ?>"><i class="fas fa-sign-in-alt"></i> <?php echo e(__('Login')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Header Area End -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="<?php echo e(route('front.index')); ?>">
                        <img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->header_logo)); ?>" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse fixed-height" id="main_menu">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a>
								</li>
								<?php if($ps->tour_menu ==1): ?>
								<li class="nav-item">
									<a class="nav-link
									 <?php echo e(Request::is('tours') ? 'active' : ''); ?>

									 <?php echo e(Request::is('tour/*') ? 'active' : ''); ?>

									 " href="<?php echo e(route('front.tours')); ?>"><?php echo e(__('Tours')); ?></a>
								</li>
								<?php endif; ?>
								<?php if($ps->hotel_menu == 1): ?>
								<li class="nav-item">
									<a class="nav-link
									 <?php echo e(Request::is('hotels') ? 'active' : ''); ?>

									 <?php echo e(Request::is('hotel/*') ? 'active' : ''); ?>

									 " href="<?php echo e(route('front.hotels')); ?>"><?php echo e(__('Hotels')); ?></a>
								</li>
								<?php endif; ?>
								<?php if($ps->space_menu == 1): ?>
								<li class="nav-item">
									<a class="nav-link
									 <?php echo e(Request::is('spaces') ? 'active' : ''); ?>

									 <?php echo e(Request::is('space/*') ? 'active' : ''); ?>

									 " href="<?php echo e(route('front.spaces')); ?>"><?php echo e(__('Space')); ?></a>
								</li>
								<?php endif; ?>
								<?php if($ps->car_menu == 1): ?>
								<li class="nav-item">
									<a class="nav-link
									 <?php echo e(Request::is('cars') ? 'active' : ''); ?>

									 <?php echo e(Request::is('cars/*') ? 'active' : ''); ?>

									 " href="<?php echo e(route('front.cars')); ?>"><?php echo e(__('Cars')); ?></a>
								</li>
								<?php endif; ?>
								<?php if($ps->blog_menu == 1): ?>
								<li class="nav-item">
									<a class="nav-link
									<?php echo e(Request::is('blog') ? 'active' : ''); ?>

									 <?php echo e(Request::is('blog/*') ? 'active' : ''); ?>

									" href="<?php echo e(route('front.blog')); ?>"><?php echo e(__('Blogs')); ?></a>
								</li>
								<?php endif; ?>
								<?php if($ps->pages_menu == 1): ?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle
									<?php echo e(Request::is('faq') ? 'active' : ''); ?>

                                	<?php echo e(Request::is('about') ? 'active' : ''); ?>

									<?php echo e(Request::is('privacy') ? 'active' : ''); ?>"
									 href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
										<?php echo e(__('Pages')); ?>

									</a>
									<ul class="dropdown-menu">
                                        <li><a class="dropdown-item <?php echo e(Request::is('faq') ? 'active' : ''); ?>" href="<?php echo e(route('front.faq')); ?>"> <i class="fa fa-angle-double-right"></i><?php echo e(__('FAQ')); ?></a></li>
                                        <?php $__currentLoopData = App\Models\Page::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="dropdown-item <?php echo e(Request::is($page->slug) ? 'active' : ''); ?>" href="<?php echo e(route('front.pages',$page->slug)); ?>"> <i class="fa fa-angle-double-right"></i><?php echo e($page->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</li>
								<?php endif; ?>
								<?php if($ps->contact_menu == 1): ?>
								<li class="nav-item">
									<a class="nav-link <?php echo e(Request::is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('front.contact')); ?>"><?php echo e(__('Contact')); ?></a>
								</li>
								<?php endif; ?>
							</ul>
							<div class="search-pc">
								<div class="serch-icon-area">
									<p class="web-serch">
										<i class="fas fa-search"></i>
									</p>
								</div>
								<div class="search-form-area-mobile">
									<span class="off-serch"><i class="fas fa-times"></i></span>
									<form class="search-form2 d-flex" action="<?php echo e(route('front.search')); ?>" method="POST">
										<?php echo csrf_field(); ?>
										<select name="type" class="mx-3">
											<?php if($ps->hotel_menu == 1): ?>
											<option value="hotel"><?php echo e(__('Hotel')); ?></option>
											<?php endif; ?>
											<?php if($ps->tour_menu == 1): ?>
											<option value="tour"><?php echo e(__('Tour')); ?></option>
											<?php endif; ?>
											<?php if($ps->car_menu == 1): ?>
											<option value="car"><?php echo e(__('Car')); ?></option>
											<?php endif; ?>
											<?php if($ps->space_menu == 1): ?>
											<option value="space"><?php echo e(__('Space')); ?></option>
											<?php endif; ?>
										</select>
										<input type="text" name="search" placeholder="<?php echo e(__('Search what you want...')); ?>">
									</form>
								</div>
							</div>
						</div>
						<div class="search-phone">
							<div class="serch-icon-area">
								<p class="web-serch">
									<i class="fas fa-search"></i>
								</p>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="search-phone d-block d-lg-none">
		<div class="search-form-area-mobile">
			<span class="off-serch"><i class="fas fa-times"></i></span>
			<form class="search-form2" action="<?php echo e(route('front.search')); ?>"  method="POST">
			    <?php echo csrf_field(); ?>
			    	<select name="type" class="mx-3">
					<?php if($ps->hotel_menu == 1): ?>
					<option value="hotel"><?php echo e(__('Hotel')); ?></option>
					<?php endif; ?>
					<?php if($ps->tour_menu == 1): ?>
					<option value="tour"><?php echo e(__('Tour')); ?></option>
					<?php endif; ?>
					<?php if($ps->car_menu == 1): ?>
					<option value="car"><?php echo e(__('Car')); ?></option>
					<?php endif; ?>
					<?php if($ps->space_menu == 1): ?>
					<option value="space"><?php echo e(__('Space')); ?></option>
					<?php endif; ?>
				</select>
			<input type="text" name="search" placeholder="<?php echo e(__('Search what you want...')); ?>">
			</form>
		</div>
	</div>
	<!--Main-Menu Area end-->

    <?php echo $__env->yieldContent('content'); ?>
	<!-- Footer Area Start -->
	<footer class="footer" id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="footer-widget about-widget">
						<div class="footer-logo">
							<a href="<?php echo e(route('front.index')); ?>">
								<img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->footer_logo)); ?>" alt="footer_logo">
							</a>
						</div>
						<div class="text">
							<p>
								<?php echo e($gs->footer_text); ?>

							</p>
						</div>

					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="footer-widget address-widget">
						<h4 class="title">
							Address
						</h4>
						<ul class="about-info">
							<li>
								<p>
									<i class="fas fa-globe"></i>
									<?php echo e($ps->street_address); ?>

								</p>
							</li>
							<li>
								<p>
                                    <i class="fas fa-phone"></i>
                                    <?php echo e($ps->contact_number); ?>

								</p>
							</li>
							<li>
								<p>
                                    <i class="far fa-envelope"></i>
                                    <?php echo e($ps->contact_email); ?>

								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
						<div class="footer-widget  footer-newsletter-widget">
							<h4 class="title">
								<?php echo e(__('Newsletter')); ?>

							</h4>
                            <div class="newsletter-form-area">
                                <form action="<?php echo e(route('newsletter.post')); ?>" id="subscribeform" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="email" placeholder="<?php echo e(__('Your email address...')); ?>" name="email" id="subemail">
                                    <button type="submit">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
							<div class="social-links">
								<h4 class="title">
										<?php echo e(__("We're social, connect with us")); ?>:
								</h4>
								<div class="fotter-social-links">
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
		</div>
		<div class="copy-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
							<div class="content">
								<div class="content">
									<p>
                                        <?php echo $gs->copy_right_text; ?>

									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->


	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>

<input type="hidden" id="user_id" value="<?php echo e(Auth::user()); ?>">
	<script>
		'use strict';
		var mainurl = "<?php echo e(url('/')); ?>";
		var gs  = <?php echo json_encode($gs, 15, 512) ?>;
		var lang  = {
          'check'  : '<?php echo e(__('ADD NEW')); ?>',
          'sss'	   : '<?php echo e(__('Success !')); ?>',
		  'login'  : '<?php echo e(__('Login')); ?>',
		  'maxsize': 'Maximun tour group size',
        };

	</script>

	<!-- jquery -->
	<script src="<?php echo e(asset('assets/front/js/jquery-3.6.0.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/front/js/jquery-migrate-3.3.2.js')); ?>"></script>
	
	<script src="<?php echo e(asset('assets/front/jquery-ui/jquery-ui.min.js')); ?>"></script>

	<!-- bootstrap -->
	<script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
	<!-- popper -->
	<script src="<?php echo e(asset('assets/front/js/popper.min.js')); ?>"></script>
	<!-- plugin js-->
	<script src="<?php echo e(asset('assets/front/js/plugin.js')); ?>"></script>
	<!-- main -->
    <script src="<?php echo e(asset('assets/front/js/myscript.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/front/js/notify.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>

	<?php echo $__env->yieldContent('script'); ?>

	<?php if(Session::has('success')): ?>
		<script>
		'use strict'
			$.notify('<?php echo e(Session::get('success')); ?>', "success");
		</script>
	<?php endif; ?>
	<?php if(Session::has('warning')): ?>
		<script>
		'use strict'
			$.notify('<?php echo e(Session::get('warning')); ?>', "warning");
		</script>
	<?php endif; ?>
	<?php if(Session::has('error')): ?>
		<script>
			'use strict'
			$.notify('<?php echo e(Session::get('error')); ?>', "error");
		</script>
	<?php endif; ?>

</body>

</html>
<?php /**PATH F:\xampp\htdocs\new-don\booking\project\resources\views/layouts/front.blade.php ENDPATH**/ ?>