<div class="container-fluid py-5">
    <div class="container-xxl">
        <div class="d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">خدماتنا</h1>
            <a href="<?php echo e(route('servicesProducts', 'service')); ?>" style="color: #e52422">عرض الكل</a>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key === 0): ?>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div>
                                <img class="w-100 h-100" src="<?php echo e($service->image_url); ?>"
                                    style="min-height: 300px; max-height: 300px" alt="">
                            </div>
                            <div class="d-flex align-items-center bg-light"
                                style=" height: 120px;
                              display: flex;
                              align-items: center;
                              justify-content: start;
                              padding:10px">

                                <div class="flex-shrink-0 p-1">
                                    <i <?php echo $service->icon ? $service->icon : ''; ?> style="font-size:25px"></i>
                                </div>
                                <div style="display: block">
                                    <a class="h5 mx-4 mb-0"
                                        href="<?php echo e(route('serviceProductDetails', $service->id)); ?>"><?php echo e($service->title); ?></a>
                                    <p class="mx-4 mb-0">

                                        <?php echo \Illuminate\Support\Str::words(strip_tags($service->content), 20, '...'); ?>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-6 col-md-6 wow fadeInUp d-flex">
                <div class="row" style="align-content:flex-start; gap:35px">
                    <?php $__currentLoopData = $services->skip(1)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex mt-2" style="justify-content: flex-start; align-items:center">

                            <img src="<?php echo e($service->image_url); ?>" style="height: 70px; width:100px; min-width:100px"
                                alt="">
                            <div style="display: block">
                                <a href="<?php echo e(route('serviceProductDetails', $service->id)); ?>" style="color: black">
                                    <span class="mx-4" style="font-weight: bold"><?php echo e($service->title); ?></span>
                                </a>
                                <p class="mx-4 mb-0">

                                    <?php echo \Illuminate\Support\Str::words(strip_tags($service->content), 20, '...'); ?>


                                </p>
                            </div>

                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>

    </div>
</div>
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/pages/HomeParts/ourServicesSection.blade.php ENDPATH**/ ?>