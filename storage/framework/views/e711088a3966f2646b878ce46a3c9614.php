<?php
    $metaData = App\Models\MetaData::pluck('value', 'key')->toArray(); // Populate the $metaData property
?>

<?php $__env->startSection('title', 'المصاعد الدولية'); ?>

<meta content="<?php echo e($metaData['description']); ?>" name="description">
<meta content="<?php echo e($metaData['keywords']); ?>" name="keywords">

<!-- Add a canonical tag to specify the preferred version of the page -->
<link rel="canonical" href="<?php echo e($metaData['canonical_link']); ?>">

<!-- Add Open Graph metadata for social media sharing -->
<meta property="og:title" content="<?php echo e($metaData['og:title']); ?>">
<meta property="og:description" content="<?php echo e($metaData['og:description']); ?>">
<meta property="og:url" content="<?php echo e($metaData['og:url']); ?>">
<meta property="og:type" content="<?php echo e($metaData['og:type']); ?>"> 
<meta property="og:site_name" content="<?php echo e($metaData['og:site_name']); ?>">
<meta property="og:updated_time" content="<?php echo e($metaData['og:updated_time']); ?>">
<meta property="og:image" content="<?php echo e($metaData['og:image']); ?>">
<meta property="og:image:secure_url" content="<?php echo e($metaData['og:image:secure_url']); ?>">
<meta property="og:image:width" content="<?php echo e($metaData['og:image:width']); ?>">
<meta property="og:image:height" content="<?php echo e($metaData['og:image:height']); ?>">
<meta property="og:image:alt" content="<?php echo e($metaData['og:image:alt']); ?>">
<meta property="og:image:type" content="<?php echo e($metaData['og:image:type']); ?>">
<meta property="article:publisher" content="<?php echo e($metaData['article:publisher']); ?>">
<meta property="article:published_time" content="<?php echo e($metaData['article:published_time']); ?>">
<meta property="article:modified_time" content="<?php echo e($metaData['article:modified_time']); ?>">

<!-- Add Twitter Card metadata for Twitter sharing -->
<meta name="twitter:card" content="<?php echo e($metaData['twitter:card']); ?>">
<meta name="twitter:title" content="<?php echo e($metaData['twitter:title']); ?>">
<meta name="twitter:description" content="<?php echo e($metaData['twitter:description']); ?>">
<meta name="twitter:image" content="<?php echo e($metaData['twitter:image']); ?>">
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/layouts/default_seo_data.blade.php ENDPATH**/ ?>