<!-- jquery -->
<script src="<?php echo e(asset('backend/assets/js/jquery-3.3.1.min.js')); ?>"></script>
<!-- plugins-jquery -->
<script src="<?php echo e(asset('backend/assets/js/plugins-jquery.js')); ?>"></script>
<!-- plugin_path -->
<script>
    var plugin_path = '<?php echo e(asset('backend/assets/js/')); ?>';
</script>

<!-- chart -->

<!-- calendar -->

<!-- charts sparkline -->

<!-- charts morris -->

<!-- datepicker -->

<!-- sweetalert2 -->
<script src="<?php echo e(asset('backend/assets/js/sweetalert2.js')); ?>"></script>
<!-- toastr -->


<script src="<?php echo e(asset('backend/assets/js/toastr.js')); ?>"></script>
<script>
    <?php if(session('toast_success')): ?>
        toastr.success("<?php echo e(session('toast_success')); ?>", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    <?php endif; ?>
    <?php if(session('toast_error')): ?>
        toastr.error("<?php echo e(session('toast_error')); ?>", "", {
            "timeOut": 1000
        }); // Set timeOut to 1000 milliseconds (1 second)
    <?php endif; ?>
</script>
<!-- validation -->

<!-- lobilist -->

<!-- custom -->
<script src="<?php echo e(asset('backend/assets/js/custom.js')); ?>"></script>




<script src="<?php echo e(asset('backend/assets/js/summernote-lite.min.js')); ?>" defer></script>

<script src="<?php echo e(asset('backend/assets/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/buttons.flash.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/pdfmake.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/vfs_fonts.js')); ?>" defer></script>
<script src="<?php echo e(asset('backend/assets/datatables/export-tables/buttons.print.min.js')); ?>" defer></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH D:\projects\c-u\resources\views/backend/layouts/footer-scripts.blade.php ENDPATH**/ ?>