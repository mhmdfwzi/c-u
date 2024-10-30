<?php $__env->startSection('title'); ?>
    المدونات / الأخبار
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> المدونات / الأخبار</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">لوحة التحكم</a></li>
                    <li class="breadcrumb-item active"> المدونات / الأخبار</li>
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
                                <th>الصورة</th>
                                <th>عنوان</th>
                                <th>الصفحة الرئيسية</th>
                                <th> النوع</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $blogsNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e($blogNews->id); ?></td>
                                    <td>
                                        <img src="<?php echo e($blogNews->image_url); ?>" height="50" width="50" alt="">
                                    </td>

                                    <td><?php echo e($blogNews->title); ?></td>

                                    <td>
                                        <?php if($blogNews->main_page == 1): ?>
                                            <span class="text-success">عرض</span>
                                        <?php else: ?>
                                            <span class="text-danger">إخفاء</span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <?php if($blogNews->type == 'blog'): ?>
                                            <span class="text-success">مدونة</span>
                                        <?php else: ?>
                                            <span class="text-danger">أخبار</span>
                                        <?php endif; ?>
                                    </td>


                                    <td>
                                        <?php
                                            $seo = App\Models\SeoData::where('entity_id', $blogNews->id)
                                                ->where('entity_type', 'blogNews')
                                                ->first();
                                        ?>
                                        <?php if($seo): ?>
                                            <a href="<?php echo e(Route('admin.seo.edit', [$blogNews->id, 'blogNews'])); ?>"
                                                class="btn btn-success btn-sm">
                                                Edit Seo
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(Route('admin.seo.create', [$blogNews->id, 'blogNews'])); ?>"
                                                class="btn btn-primary btn-sm">
                                                Add Seo
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('admin.blogsNews.edit', $blogNews->id)); ?>"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>


                                        <form action="<?php echo e(Route('admin.blogsNews.destroy', $blogNews->id)); ?>" method="post"
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/backend/pages/blogsNews/index.blade.php ENDPATH**/ ?>