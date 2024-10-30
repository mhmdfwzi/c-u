<?php $__env->startSection('seo_data'); ?>
    <?php echo $__env->make('frontend.layouts.default_seo_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        @media (min-width: 992px) {
            .col-lg-custom {
                flex: 0 0 auto;
                width: 30%;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: 100px">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                <?php if($type == 'product'): ?>
                    <p> معرض المنتجات </p>
                <?php elseif($type == 'service'): ?>
                    <p> معرض الخدمات</p>
                <?php endif; ?>


            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container-fluid">


            <div class="row d-flex justify-content-center " data-aos="fade-up" data-aos-delay="100">
                <?php $__empty_1 = true; $__currentLoopData = $servicesProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                        $serviceImages = App\Models\Image::where('service_product_id', $serviceProduct->id)->get();
                    ?>
                    <div class="col-lg-custom col-md-6 portfolio-item m-2 p-0">
                        <div class="portfolio-wrap d-flex justify-content-center text-center ">
                            <div style="width: 100%">

                                

                                <img src="<?php echo e($serviceProduct->image_url); ?>" alt=""
                                    style="margin: auto;
                                    max-height: 440px;
                                    max-width: 750px;"
                                    class="w-100">
                            </div>

                            <div class="portfolio-links">

                                <a style="font-size: 18px" href="<?php echo e(route('serviceProductDetails', $serviceProduct->id)); ?>"
                                    title="عرض التفاصيل">
                                    عرض التفاصيل
                                </a>
                                <a style="font-size: 18px" href="<?php echo e(route('createOrder', $serviceProduct->id)); ?>"
                                    target="_blank" title="طلب">
                                    <?php if($type == 'product'): ?>
                                        طلب المنتج
                                    <?php elseif($type == 'service'): ?>
                                        طلب الخدمة
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                        <div class="m-4">

                            <?php if($type == 'product'): ?>
                                <span class="bg-success text-white p-2"> منتج </span>
                            <?php elseif($type == 'service'): ?>
                                <span class="bg-danger text-white p-2"> خدمة</span>
                            <?php endif; ?>

                            <h5 class="mt-3">
                                <a href="<?php echo e(route('serviceProductDetails', $serviceProduct->id)); ?>">
                                    <?php echo e($serviceProduct->title); ?></a>
                            </h5>

                            <p style="line-height: 2rem">
                                <?php echo \Illuminate\Support\Str::words(strip_tags($serviceProduct->content), 20, '...'); ?>

                            </p>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <?php $__currentLoopData = $serviceImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($serviceImage->image_url); ?>" data-gall="portfolioGallery" class="venobox"
                                    title="<?php echo e($serviceProduct->title); ?>">
                                    <img src="<?php echo e($serviceImage->image_url); ?>" alt="" height="70" width="70"
                                        class="heartbeat" style="border-radius: 35px; border:1px dashed black; padding:2px">
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if($type == 'product'): ?>
                        <p>لا توجد منتجات</p>
                    <?php elseif($type == 'service'): ?>
                        <p>لا توجد خدمات</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Portfolio Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/frontend/pages/serviceProducts.blade.php ENDPATH**/ ?>