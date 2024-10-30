<div class="container-fluid py-5" style="background: #f6f6f6">
    <div class="container-xxl">
        <div class="d-flex justify-content-between wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">منتجاتنا</h1>
            <a href="<?php echo e(route('servicesProducts', 'product')); ?>" style="color:#e52422">عرض الكل</a>
        </div>
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="w-100" style="min-height: 200px; max-height:200px" src="<?php echo e($product->image_url); ?>"
                            alt="">
                        <div class="d-flex align-items-center bg-light"
                            style=" height: 90px;
                              display: flex;
                              align-items: center;
                              justify-content: start;
                              padding:10px">
                            <div class="flex-shrink-0 p-1">

                                <i <?php echo $product->icon ? $product->icon : ''; ?> style="font-size:25px"></i>

                            </div>
                            <a class="h5 mx-4 mb-0"
                                href="<?php echo e(route('serviceProductDetails', $product->id)); ?>"><?php echo e($product->title); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH D:\projects\c-u\resources\views/frontend/pages/HomeParts/ourProductsSection.blade.php ENDPATH**/ ?>