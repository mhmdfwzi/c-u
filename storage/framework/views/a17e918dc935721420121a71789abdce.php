<?php $__env->startSection('seo_data'); ?>
    <?php echo $__env->make('frontend.layouts.default_seo_data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        h2 {
            margin-bottom: 0px;
            margin-top: 25px;
            text-align: center;
            font-weight: 200;
            font-size: 19px;
            font-size: 1.2rem;

        }

        .container {
            height: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;

        }

        ul {
            margin: 0;
            padding: 0;
        }

        ul li {
            list-style: none;
            padding-left: 10px;
            cursor: pointer;
        }

        ul li:hover {
            background: rgba(255, 255, 255, 0.1);
        }




        .window {
            height: 540px;
            width: 800px;
            background: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            z-index: 10;
        }

        .order-info {
            height: 100%;
            width: 50%;
            padding-left: 25px;
            padding-right: 25px;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
        }

        .price {
            bottom: 0px;
            position: absolute;
            right: 0px;
            color: #4488dd;
        }

        .order-table td:first-of-type {
            width: 25%;
        }

        .order-table {
            position: relative;
        }

        .line {
            height: 1px;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
            background: #ddd;
        }

        .order-table td:last-of-type {
            vertical-align: top;
            padding-left: 25px;
        }

        .order-info-content {
            table-layout: fixed;

        }

        .full-width {
            width: 100%;
        }

        .pay-btn {
            border: none;
            /* background: #22b877; */
            background: #f2881f;
            line-height: 2em;
            border-radius: 10px;
            font-size: 19px;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            position: absolute;
            bottom: 25px;
            width: calc(100% - 50px);
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .pay-btn:hover {
            background: #22a877;
            color: #eee;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .total {
            margin-top: 25px;
            font-size: 20px;
            font-size: 1.3rem;
            position: absolute;
            bottom: 30px;
            right: 27px;
            left: 35px;
        }

        .credit-info {
            /* background: #030b2f; */
            background: rgb(20, 20, 21);
            height: 100%;
            width: 50%;
            color: #eee;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 14px;
            font-size: .9rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-sizing: border-box;
            padding-left: 25px;
            padding-right: 25px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
        }

        .dropdown-btn {
            background: rgba(255, 255, 255, 0.1);
            width: 100%;
            border-radius: 5px;
            text-align: center;
            line-height: 1.5em;
            cursor: pointer;
            position: relative;
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-btn:after {
            content: '\25BE';
            right: 8px;
            position: absolute;
        }

        .dropdown-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-select {
            display: none;
        }

        .credit-card-image {
            display: block;
            max-height: 80px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .credit-info-content {
            margin-top: 25px;
            -webkit-flex-flow: column;
            -ms-flex-flow: column;
            flex-flow: column;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        @media (max-width: 600px) {
            .window {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 0px;
            }

            .order-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .credit-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .pay-btn {
                border-radius: 0px;
            }
        }

        .desc h5 {
            color: white;
            font-size: 14px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                <?php if($serviceProduct->type == 'product'): ?>
                    طلب المنتج
                <?php elseif($serviceProduct->type == 'service'): ?>
                    طلب الخدمة
                <?php endif; ?>

            </h1>

        </div>
    </div>
    <!-- Page Header End -->


    <div class='container'>
        <div class='window'>
            <div class='order-info py-5 '>

                <form method="post" enctype="multipart/form-data" action="<?php echo e(route('checkout')); ?>" autocomplete="off">

                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="service_product_id" value="<?php echo e($serviceProduct->id); ?>">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="customer_name" class="mb-2"> أسم العميل</label>
                                <input name="customer_name" id="customer_name" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="phone" class="mb-2">رقم الهاتف</label>
                                <input name="phone" id="phone" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="address" class="mb-2"> العنوان</label>
                                <input name="address" id="address" type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="email" class="mb-2"> البريد الألكترونى</label>
                                <input name="email" id="email" type="email" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <button class='pay-btn' type="submit">أطلب الأن</button>
                </form>


            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>

                    <h2 class="text-white">بيانات الطلب</h2>
                    <div class='line'></div>
                    <div class="row desc mt-3 align-items-center">
                        <div class="col-md-4">
                            <img src="<?php echo e($serviceProduct->image_url); ?>" class="full-width px-2" style="border-radius: 50%;"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <div>
                                <span
                                    style="font-weight: bold; font-size:16px; color:#f2881f"><?php echo e($serviceProduct->title); ?></span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/frontend/pages/checkout.blade.php ENDPATH**/ ?>