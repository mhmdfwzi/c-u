<?php $__env->startSection('title'); ?>
    الخدمات / المنتجات
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الخدمات / المنتجات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active"> الخدمات / المنتجات</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <table id="custom_table" class="display">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>الصورة الرئيسية</th>
                                <td>ال gallery</td>
                                <th>عنوان</th>
                                <th>icon</th>
                                <th>الصفحة الرئيسية</th>
                                <th>أضافة صورة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $servicesProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($serviceProduct->id); ?></td>
                                    <td>
                                        <img src="<?php echo e($serviceProduct->image_url); ?>" height="50" width="50"
                                            alt="">
                                    </td>
                                    <td>
                                        <?php
                                            $images = App\Models\Image::where('service_product_id', $serviceProduct->id)->pluck('image');
                                        ?>

                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(asset('storage/thumbnail/images/' . $image)); ?>" height="50"
                                                width="50" alt="">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>

                                    <td><?php echo e($serviceProduct->title); ?></td>

                                    <td>
                                        <i <?php echo $serviceProduct->icon ? $serviceProduct->icon : ''; ?>></i>
                                    </td>

                                    <td>
                                        <?php if($serviceProduct->main_page == 1): ?>
                                            <span class="text-success">عرض</span>
                                        <?php else: ?>
                                            <span class="text-danger">إخفاء</span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#addImage<?php echo e($serviceProduct->id); ?>">
                                            أضافة <i class="fa fa-plus"></i>
                                        </a>

                                    </td>

                                    <?php echo $__env->make('backend.pages.servicesProducts.add_image_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <td>
                                        <?php
                                            $seo = App\Models\SeoData::where('entity_id', $serviceProduct->id)
                                                ->where('entity_type', 'serviceProduct')
                                                ->first();
                                        ?>
                                        <?php if($seo): ?>
                                            <a href="<?php echo e(Route('admin.seo.edit', [$serviceProduct->id, 'serviceProduct'])); ?>"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(Route('admin.seo.create', [$serviceProduct->id, 'serviceProduct'])); ?>"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('admin.servicesProducts.edit', $serviceProduct->id)); ?>"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <form action="<?php echo e(Route('admin.servicesProducts.destroy', $serviceProduct->id)); ?>"
                                            method="post" style="display:inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>


                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        $(document).ready(function() {


            var datatable = $('#custom_table').DataTable({
                stateSave: true,
                sortable: true,
                oLanguage: {
                    sSearch: 'البحث',
                    sInfo: "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                    sZeroRecords: 'لا يوجد سجل متتطابق',
                    sEmptyTable: 'لا يوجد بيانات في الجدول',
                    oPaginate: {
                        sFirst: "First",
                        sLast: "الأخير",
                        sNext: "التالى",
                        sPrevious: "السابق"
                    },
                },
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [1, 2, 3]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/backend/pages/servicesProducts/index.blade.php ENDPATH**/ ?>