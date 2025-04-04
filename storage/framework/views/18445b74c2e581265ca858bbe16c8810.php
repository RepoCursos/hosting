<?php if($message = Session::get('success')): ?>
<div style="padding: 15px; background-color:green; color: white">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<?php if($message = Session::get('danger')): ?>
<div style="padding: 15px; background-color:red; color: white">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?><?php /**PATH /app/resources/views/layouts/_partials/messages.blade.php ENDPATH**/ ?>