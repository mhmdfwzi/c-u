<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php echo $__env->make('backend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="<?php echo e(asset('backend/assets/images/pre-loader/loader-01.svg')); ?>" alt="">
        </div>

        <!--=================================
 preloader -->

        <?php echo $__env->make('backend.layouts.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('backend.layouts.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

            <?php echo $__env->yieldContent('page-header'); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    <?php echo $__env->make('backend.layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\projects\c-u\resources\views/backend/layouts/master.blade.php ENDPATH**/ ?>