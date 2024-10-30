<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    


    

    <?php echo $__env->make('frontend.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>



    <div class="float-buttons">
        
		        <div class="d-flex justify-content-center">
            <a href="tel:+201070001975" target="_blank">
                <img src="<?php echo e(asset('frontend/img/phone_icon.png')); ?>" height="55" width="55" alt="WhatsApp">
            </a>
        </div>

        <a href="https://api.whatsapp.com/send?phone=01070001975" target="_blank">
            <img src="<?php echo e(asset('frontend/img/whatsapp_logo.webp')); ?>" alt="WhatsApp" class="whatsapp-icon">
        </a>

    </div>
    <!-- ======= Whatsapp button ======= -->

    

    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <?php echo $__env->make('frontend.layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\projects\c-u\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>