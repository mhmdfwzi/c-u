<!-- Title -->
<title><?php echo $__env->yieldContent('title'); ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo e(asset('backend/assets/images/favicon.ico')); ?>" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">


<link href="<?php echo e(asset('backend/assets/datatables/datatables.min.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('backend/assets/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('backend/assets/css/summernote-lite.min.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!--- Style css -->

<link href="<?php echo e(asset('backend/assets/css/rtl.css')); ?>" rel="stylesheet">


<?php echo $__env->yieldPushContent('style'); ?>
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/backend/layouts/head.blade.php ENDPATH**/ ?>