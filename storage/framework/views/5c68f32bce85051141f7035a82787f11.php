        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            
            <!-- Top bar left -->
            <ul class="nav navbar-nav px-3">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i
                                    class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>

                <?php if (isset($component)) { $__componentOriginal86437f5ef8e35779f7aa5451120aed80 = $component; } ?>
<?php $component = App\View\Components\Dashboard\NotificationMenu::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.notification-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\NotificationMenu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => '7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86437f5ef8e35779f7aa5451120aed80)): ?>
<?php $component = $__componentOriginal86437f5ef8e35779f7aa5451120aed80; ?>
<?php unset($__componentOriginal86437f5ef8e35779f7aa5451120aed80); ?>
<?php endif; ?>

                <li class="nav-item dropdown mr-30">

                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo e(URL::asset('backend/assets/images/profile-avatar.jpg')); ?>" alt="avatar">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0"></h5>
                                    <span><?php echo e(Auth::user()->email); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        

                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                            this.closest('form').submit(); "
                                role="button">

                                <i class="text-danger ti-unlock"></i>
                                تسجل الخروج
                            </a>

                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/backend/layouts/main-header.blade.php ENDPATH**/ ?>