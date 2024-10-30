<?php if($clients->count() > 0): ?>
    <div class="container-fluid py-5" style="direction:ltr">


        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">شركئنا</h1>
            </div>
            <section class="customer-logos slider">

                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slide" style="max-height: 100px; max-width:100px"> <img src="<?php echo e($client->image_url); ?>"
                            alt="logo">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
        </div>
    </div>
<?php endif; ?>


<?php /**PATH D:\projects\c-u\resources\views/frontend/pages/HomeParts/ourClientsSection.blade.php ENDPATH**/ ?>