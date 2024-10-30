<nav class="navbar bg-white navbar-light sticky-top px-3 px-lg-5 my-2">
    <section class="navbar-left">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand">
            <img class="img-fluid" height="50" width="150" src="<?php echo e(asset('frontend/img/logo-1.png')); ?>" alt="">
            
        </a>
    </section>

    <section class="navbar-center mt-3">
        <span class="overlay"></span>
        <div class="menu" id="menu">
            <div class="menu-header">
                <span class="menu-arrow"><i class="ion ion-ios-arrow-down"></i></span>
                <span class="menu-title"></span>
            </div>
            <ul class="menu-inner p-0 ">
                <li class="menu-item">
                    <a href="<?php echo e(route('home')); ?>"
                        class="<?php echo e(request()->routeIs('home') ? 'menu-link-active' : 'menu-link'); ?>">الرئيسية</a>
                </li>

                <li class="menu-item menu-dropdown">
                    <span class="menu-link">عن الشركة<i class="ion ion-ios-arrow-down m-1"></i></span>
                    <div class="submenu megamenu megamenu-column-1">
                        <div class="submenu-inner">
                            <ul class="submenu-list">
                                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="submenu-item">
                                        <a href="<?php echo e(route('page.show', $page->slug)); ?>" 
                                            class="submenu-link <?php echo e(Route::currentRouteName() === 'page.show' && request('slug') === $page->slug ? 'active' : ''); ?>">
                                            <?php echo e($page->title); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                        </div>

                    </div>
                </li>

                <li class="menu-item menu-dropdown">
                    <span class="menu-link">فرصة سفر<i class="ion ion-ios-arrow-down m-1"></i></span>
                    <div class="submenu megamenu megamenu-column-4">

                        <?php $__currentLoopData = $services->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="submenu-inner">
                                <a href="<?php echo e(route('serviceProductDetails', $service->id)); ?>"
                                    class="submenu-link-1 mb-2">
                                    <img src="<?php echo e($service->image_url); ?>" style="min-height: 200px; max-height:200px"
                                        class="submenu-image" alt="Product">
                                    <span class="submenu-title"><?php echo e($service->title); ?></span>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="m-auto">
                            <a href="<?php echo e(route('servicesProducts', 'service')); ?>" style="color: #e52422">عرض الكل</a>
                        </div>
                    </div>
                </li>

     


                <li class="menu-item">
                    <a href="#" class="menu-link"  >المدونة</a>
                </li>

 

                <li class="menu-item">
                    <a href="<?php echo e(route('contact')); ?>"
                        class="<?php echo e(request()->routeIs('contact') ? 'menu-link-active' : 'menu-link'); ?>">تواصل معنا</a>
                </li>

                
            </ul>
        </div>
    </section>

    <section class="navbar-right">
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
			
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                        <?php if(!empty($website_info['instagram_link'])): ?> href="https://linktr.ee/elevatorsinternational8" <?php endif; ?>>

                        <img src="https://international-elevators.com/frontend/img/linktree-logo-icon.webp" style="width:20px"></a>
							
			
			<a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                <?php if(!empty($website_info['facebook_link'])): ?> href="<?php echo e($website_info['facebook_link']); ?>" <?php endif; ?>>
                <i class="fab fa-facebook-f"></i></a>
			
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" target="_blank"
                <?php if(!empty($website_info['twitter_link'])): ?> href="<?php echo e($website_info['twitter_link']); ?>" <?php endif; ?>>
                <i class="fab fa-twitter"></i></a>

            <a class="btn btn-square rounded-circle bg-light text-primary me-0" target="_blank"
                <?php if(!empty($website_info['instagram_link'])): ?> href="<?php echo e($website_info['instagram_link']); ?>" <?php endif; ?>>

                <i class="fab fa-instagram"></i></a>
        </div>
        
    </section>
</nav>
<?php /**PATH D:\projects\c-u\resources\views/frontend/layouts/nav.blade.php ENDPATH**/ ?>