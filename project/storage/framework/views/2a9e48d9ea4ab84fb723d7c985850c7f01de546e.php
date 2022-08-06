

<?php $__env->startSection('title'); ?>
	<?php echo e(__('Blogs | ')); ?> <?php echo e($gs->website_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--Main Breadcrumb Area Start -->
	<div class="main-breadcrumb-area"  style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->breadcumb_banner)); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						<?php echo e(__('Blog')); ?>

					</h1>
					<ul class="pages">
						<li>
							<a href="<?php echo e(route('front.index')); ?>">
								<?php echo e(__('Home')); ?>

							</a>
						</li>
						<li class="active">
                        <a href="<?php echo e(route('front.blog')); ?>">
								<?php echo e(__('Blog')); ?>

							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--Main Breadcrumb Area End -->

	<!-- Blog Area Start -->
	<section class="blog blog-page" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
							<a href="<?php echo e(route('front.blog.show',$blog->slug)); ?>" class="single-blog">
								<div class="img">
									<img src="<?php echo e(asset('assets/images/blogs/'.$blog->image->image)); ?>" alt="">
								</div>
								<div class="content">
									<span>
										<h4 class="title">
											<?php echo e($blog->title); ?>

										</h4>
									</span>
									<div class="text">
										<p>
                                            <?php echo e(substr(strip_tags($blog->description),0, 200)); ?>

										</p>
									</div>
								
									<ul class="top-meta">
											<li>
												<span>
                                                    <i class="far fa-clock"></i><?php echo e(Carbon\Carbon::parse($blog->created_at)->diffForHumans()); ?>

												</span>
											</li>
										</ul>
								</div>
							</a>
						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>	
				</div>
				<div class="col-lg-4">
					<div class="blog-aside">
						<div class="serch-widget">
							<h4 class="title">
								<?php echo e(__('Search')); ?>

							</h4>
							<form action="#">
								<input type="text" placeholder="<?php echo e(__('Search')); ?>">
								<button class="submit" type="submit"><?php echo e(__('Search')); ?></button>
							</form>
						</div>
						<div class="categori">
							<h4 class="title"><?php echo e(__('Categories')); ?></h4>
							<ul class="categori-list">
								<?php $__currentLoopData = $bcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($cat->blogs()->count() != 0): ?>
                                        <li>
                                            <a href="<?php echo e(route('front.blogcategory',$cat->slug)); ?>" <?php echo e($cat->id == $blog->category_id ? 'class="active"':''); ?>>
                                                <span><?php echo e($cat->name); ?></span>
                                                <span>(<?php echo e($cat->blogs()->count()); ?>)</span>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
						<div class="recent-post-widget">
							<h4 class="title"><?php echo e(__('Recent Post')); ?></h4>
							<ul class="post-list">
								<?php $__currentLoopData = App\Models\Blog::orderBy('created_at', 'desc')->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="post">
                                        <div class="post-img">
                                            <img style="width: 73px; height: 59px;" src="<?php echo e(asset('assets/images/blogs/'.$blog->image->image)); ?>" alt="blog image">
                                        </div>
                                        <div class="post-details">
                                            <a href="<?php echo e(route('front.blog.show',$blog->slug)); ?>">
                                                <h4 class="post-title">
                                                    <?php echo e(strlen($blog->title) > 45 ? substr($blog->title,0,45)." .." : $blog->title); ?>

                                                </h4>
                                            </a>
                                            <p class="date">
                                                <?php echo e(date('M d - Y',(strtotime($blog->created_at)))); ?>

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
                        </div>
                     
						<div class="tags">
							<h4 class="title"><?php echo e(__('Tags')); ?></h4>
							<span class="separator"></span>
							<ul class="tags-list">
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if(!empty($tag)): ?>
                                <li>
                                    <a href="<?php echo e(route('front.blogtags',$tag)); ?>"><?php echo e($tag); ?> </a>
                                </li>
                                <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Area End-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/devgenius/public_html/booking/project/resources/views/front/blog.blade.php ENDPATH**/ ?>