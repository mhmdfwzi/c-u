<!-- Modal -->
<div class="modal fade" id="addImage<?php echo e($serviceProduct->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">أضافة صورة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data"
                    action="<?php echo e(route('admin.servicesProducts.add_image', $serviceProduct->id)); ?>" autocomplete="off">

                    <?php echo csrf_field(); ?>


                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>الصورة<span class="text-danger">*</span></label>
                                <div class="avatar-img">

                                    <input onchange="preview()" type="file" name="image" accept="image/*"
                                        id="upload-photo" />
                                </div>
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="alert alert-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                    </div>



                    <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">أضافة </button>


                </form>
            </div>
            
        </div>
    </div>
</div>
<?php /**PATH D:\projects\c-u\resources\views/backend/pages/servicesProducts/add_image_modal.blade.php ENDPATH**/ ?>