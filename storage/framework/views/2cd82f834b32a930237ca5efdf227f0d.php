<li class="nav-item dropdown ">
    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <i class="ti-bell"></i>
        <?php if($newCount): ?>
            <span class="badge badge-danger notification-status">
                <?php echo e($newCount); ?>

            </span>
        <?php endif; ?>

    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
        <div class="dropdown-header notifications">
            <strong>Notifications</strong>
            <span class="badge badge-pill badge-warning"><?php echo e($newCount); ?></span>
        </div>
        <div class="dropdown-divider"></div>
        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($notification->data['url']); ?>?notification_id=<?php echo e($notification->id); ?>"
                class="dropdown-item <?php if($notification->unread()): ?> text-danger <?php endif; ?>">
                <?php echo e($notification->data['body']); ?>

                <small class="float-right text-muted time"><?php echo e($notification->created_at->diffForHumans()); ?></small> </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</li>
<?php /**PATH /home/sites/37b/f/f4c6554c5f/httpdocs/resources/views/components/backend/dashboard/notification-menu.blade.php ENDPATH**/ ?>