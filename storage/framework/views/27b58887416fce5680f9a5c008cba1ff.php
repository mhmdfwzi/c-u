<?php $__env->startSection('title'); ?>
    الصفحات
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> الصفحات</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active">الصفحات</li>
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
                                <th>عنوان الصفحة</th>
                                <th>slug</th>
                                <th>نشط</th>
                                <th>الصورة</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($page->id); ?></td>
                                    <td><?php echo e($page->title); ?></td>
                                    <td><?php echo e($page->slug); ?></td>
                                    <td>
                                        <?php if($page->active == '1'): ?>
                                            <span class="text-success">نشط</span>
                                        <?php else: ?>
                                            <span class="text-danger">غير نشط</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo e($page->image_url); ?>" height="50" width="50" alt="">
                                    </td>

                                    <td>

                                        <?php
                                            $seo = App\Models\SeoData::where('entity_id', $page->id)
                                                ->where('entity_type', 'page')
                                                ->first();
                                        ?>
                                        <?php if($seo): ?>
                                            <a href="<?php echo e(Route('admin.seo.edit', [$page->id, 'page'])); ?>"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(Route('admin.seo.create', [$page->id, 'page'])); ?>"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(Route('admin.pages.edit', $page->id)); ?>" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <form action="<?php echo e(Route('admin.pages.destroy', $page->id)); ?>" method="post"
                                            style="display:inline">
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
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },

                    'colvis'
                ],
                responsive: true
            });


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\c-u\resources\views/backend/pages/pages/index.blade.php ENDPATH**/ ?>