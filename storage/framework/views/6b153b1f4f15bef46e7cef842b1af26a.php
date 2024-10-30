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
                <?php if($type == 'blog'): ?>
                    <p> المدونة </p>
                <?php elseif($type == 'news'): ?>
                    <p> الأخبار </p>
                <?php endif; ?>


            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container-fluid">
            


            <div class="row d-flex justify-content-center " data-aos="fade-up" data-aos-delay="100">
                <?php $__empty_1 = true; $__currentLoopData = $blogsNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-custom col-md-6 portfolio-item m-2 p-0">
                        <div class="portfolio-wrap d-flex justify-content-center text-center ">
                            <div style="width: 100%">

                                

                                <img src="<?php echo e($blogNews->image_url); ?>" alt=""
                                    style="margin: auto;
                                    max-height: 440px;
                                    max-width: 750px;"
                                    class="w-100">
                            </div>

                            <div class="portfolio-links">
                                <a style="font-size: 18px" href="<?php echo e(route('blogNewsDetails', $blogNews->id)); ?>"
                                    title="عرض التفاصيل">
                                    عرض التفاصيل
                                </a>
                            </div>
                        </div>
                        <div class="m-4">

                            <?php if($type == 'blog'): ?>
                                <span class="bg-success text-white p-2"> مدونة </span>
                            <?php elseif($type == 'news'): ?>
                                <span class="bg-danger text-white p-2"> أخبار</span>
                            <?php endif; ?>

                            <h5 class="mt-3">
                                <a href="<?php echo e(route('blogNewsDetails', $blogNews->id)); ?>"><?php echo e($blogNews->title); ?></a>
                            </h5>

                            <p style="line-height: 2rem">
                                <?php echo \Illuminate\Support\Str::words(strip_tags($blogNews->content), 20, '...'); ?>

                            </p>
                        </div>


                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php if($type == 'blog'): ?>
                        <p>لا توجد مدونات</p>
                    <?php elseif($type == 'news'): ?>
                        <p>لا توجد أخبار</p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>


        </div>
    </section><!-- End Portfolio Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/pages/blogsNews.blade.php ENDPATH**/ ?>