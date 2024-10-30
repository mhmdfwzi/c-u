<?php $__env->startSection('seo_data'); ?>
    <?php
        $seoData = App\Models\SeoData::where('entity_id', $serviceProduct->id)
            ->where('entity_type', 'serviceProduct')
            ->first();
    ?>
    <?php if($seoData): ?>
        <meta content="<?php echo e($seoData->keywords); ?>" name="keywords">
        <?php $__env->startSection('title', $seoData->title); ?>
        <meta content="<?php echo e($seoData->meta_description); ?>" name="description">

        
        <meta property="og:title" content="<?php echo e($seoData->structured_data['og']['og_title']); ?>">
        <meta property="og:description" content="<?php echo e($seoData->structured_data['og']['og_description']); ?>">
        <meta property="og:image" content="<?php echo e($seoData->structured_data['og']['og_url']); ?>">
        <meta property="og:url" content="<?php echo e($seoData->structured_data['og']['og_type']); ?>">
        <meta property="og:type" content="<?php echo e($seoData->structured_data['og']['og_image']); ?>">
        <meta property="og:site_name" content="<?php echo e($seoData->structured_data['og']['og_site_name']); ?>">
        <meta property="og:updated_time" content="<?php echo e($seoData->structured_data['og']['og_updated_time']); ?>">
        <meta property="og:image:secure_url" content="<?php echo e($seoData->structured_data['og']['og_image_secure_url']); ?>">
        <meta property="og:image:width" content="<?php echo e($seoData->structured_data['og']['og_image_width']); ?>">
        <meta property="og:image:height" content="<?php echo e($seoData->structured_data['og']['og_image_height']); ?>">
        <meta property="og:image:alt" content="<?php echo e($seoData->structured_data['og']['og_image_alt']); ?>">
        <meta property="og:image:type" content="<?php echo e($seoData->structured_data['og']['og_image_type']); ?>">

        
        <meta name="article:publisher" content="<?php echo e($seoData->structured_data['article']['article_publisher']); ?>">
        <meta name="article:published_time" content="<?php echo e($seoData->structured_data['article']['article_published_time']); ?>">
        <meta name="article:modified_time" content="<?php echo e($seoData->structured_data['article']['article_modified_time']); ?>">

        
        <meta name="twitter:title" content="<?php echo e($seoData->structured_data['twitter']['twitter_title']); ?>">
        <meta name="twitter:description" content="<?php echo e($seoData->structured_data['twitter']['twitter_description']); ?>">
        <meta name="twitter:image" content="<?php echo e($seoData->structured_data['twitter']['twitter_image']); ?>">
        <meta name="twitter:card" content="<?php echo e($seoData->structured_data['twitter']['twitter_card']); ?>">
    <?php else: ?>
        <meta content="" name="keywords">
        <meta content="" name="description">
    <?php $__env->startSection('title', 'المصاعد الدولية'); ?>

    
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:site_name" content="">
    <meta property="og:updated_time" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <meta property="og:image:alt" content="">
    <meta property="og:image:type" content="">

    
    <meta name="article:publisher" content="">
    <meta name="article:published_time" content="">
    <meta name="article:modified_time" content="">

    
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="">
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div style=" padding:15px 0px">
                    <p style="font-size: 20px; font-weight:bold; color:var(--primary); text-align: center;">
                        <?php echo e($serviceProduct->title); ?></p>
                </div>
                <div style="margin: auto; display: table; margin-bottom:15px;">
                    <img src="<?php echo e($serviceProduct->image_url); ?>" style="max-height:400px; max-width:700px"
                        alt="">
                </div>


                <div class="d-flex justify-content-center my-4">
                    <a href="<?php echo e(route('createOrder', $serviceProduct->id)); ?>" class="btn btn-info text-white ">
                        <?php if($serviceProduct->type == 'product'): ?>
                          تقدم بطلب
                        <?php else: ?>
                             
                            تقدم بطلب
                        <?php endif; ?>
                    </a>
                </div>
                <?php echo $serviceProduct->content; ?>

                <div class="sharethis-inline-share-buttons"></div>
            </div>
            <div class="col-lg-1 col-md-1">
            </div>

            <div class="col-lg-4 col-md-4 mt-4">


                <h4>  فرص سفر اخرى </h4>
                <?php $__currentLoopData = $popularServiceProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex mt-5" style="justify-content: flex-start; align-items:center">

                        <img src="<?php echo e($popular->image_url); ?>" style="height: 50px; width:100px" alt="">
                        

                        <div style="display: block">
                            <a href="<?php echo e(route('serviceProductDetails', $popular->id)); ?>" style="color: black">
                                <span class="mx-4" style="font-weight: bold"><?php echo e($popular->title); ?></span>
                            </a>
                            <p class="mx-4 mb-0">

                                <?php echo \Illuminate\Support\Str::words(strip_tags($popular->content), 10, '...'); ?>


                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=6566f0433bcaed00121fca65&product=inline-share-buttons&source=platform"
    async="async"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/frontend/pages/serviceProductsDetails.blade.php ENDPATH**/ ?>