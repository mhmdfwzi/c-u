<?php $__env->startSection('seo_data'); ?>
    <?php
        $seoData = App\Models\SeoData::where('entity_id', $page->id)
            ->where('entity_type', 'page')
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
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo e($page->title); ?></h1>
        
    </div>
</div>
<!-- Page Header End -->


<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <img src="<?php echo e($page->image_urll); ?>" class="w-100" alt="">
            </div>
            <div class="col-lg-8 col-md-8">
                
                <?php echo $page->content; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/pages/show.blade.php ENDPATH**/ ?>