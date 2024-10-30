<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner slider-content">

            <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($index == 0 ? 'active' : ''); ?>">
                    <img class="w-100 gallery-image" src="<?php echo e($item->image_url); ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-12" style="margin-top: 275px; background: rgb(46 54 55 / 50%)">
                                    <h5 class="display-4 text-white mb-4 animated slideInDown gallery-text">
                                        <?php echo e($item->title); ?></h5>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/frontend/pages/HomeParts/gallerySection.blade.php ENDPATH**/ ?>