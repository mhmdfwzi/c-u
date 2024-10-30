<?php $__env->startSection('seo_data'); ?>
    <?php echo $__env->make('frontend.layouts.default_seo_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Gallery Start -->
    <?php echo $__env->make('frontend.pages.HomeParts.gallerySection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    
    <?php echo $__env->make('frontend.pages.HomeParts.aboutSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('frontend.pages.HomeParts.ourServicesSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Numbers section -->
    <?php echo $__env->make('frontend.pages.HomeParts.numbersSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- our products section -->
    
    
    
<!-- blogs section -->
     
<!-- why choose us section -->
    
    <?php echo $__env->make('frontend.pages.HomeParts.whyChooseUsSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- our clients section -->

    
    <?php echo $__env->make('frontend.pages.HomeParts.ourClientsSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- end our clients section -->
<?php $__env->startPush('scripts'); ?>
    <script>
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });

        const leftDoor = document.getElementById('left-door');
        const rightDoor = document.getElementById('right-door');
        const floor1 = document.getElementById('floor-1');
        const floor2 = document.getElementById('floor-2');
        const floor3 = document.getElementById('floor-3');
        const floor4 = document.getElementById('floor-4');
        const floor5 = document.getElementById('floor-5');
        const controlUp = document.getElementById('control-up');
        const arrowUp = document.getElementById('arrow-up');
        const welcomeMessage = document.getElementById('welcome-message');


        // Elevator animation function
        function elevator() {
            leftDoor.classList.add('left-door');
            rightDoor.classList.add('right-door');
            floor1.classList.add('floor-1');
            floor2.classList.add('floor-2');
            floor3.classList.add('floor-3');
            floor4.classList.add('floor-4');
            floor5.classList.add('floor-5');
            arrowUp.classList.add('arrow-up');

            setTimeout(() => {
                welcomeMessage.classList.add('show');
            }, 6000); // Adjust the delay based on your animation duration
        }


        // Click to start the animation
        controlUp.addEventListener('click', elevator);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/frontend/pages/home.blade.php ENDPATH**/ ?>