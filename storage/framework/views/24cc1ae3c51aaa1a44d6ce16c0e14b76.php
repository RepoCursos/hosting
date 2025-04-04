<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('product._components.form'); ?>
        <?php $__env->slot('title'); ?> 
            <?php echo e(__('views.section') . " " . __('views.Product')); ?>

        <?php $__env->endSlot(); ?>

        <?php $__env->slot('action'); ?>
            action="<?php echo e(route('product.store')); ?>"
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('method'); ?>

        <?php $__env->slot('photo'); ?>
        <input type="file" name="urlfoto" class="form-control" placeholder="File" required>
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('name'); ?>
        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('price'); ?>
        <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('stock'); ?>
        <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" class="form-control">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('categoria'); ?>
        <option value="" selected disabled><?php echo e(__('views.Selected_Category')); ?></option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/product/create.blade.php ENDPATH**/ ?>