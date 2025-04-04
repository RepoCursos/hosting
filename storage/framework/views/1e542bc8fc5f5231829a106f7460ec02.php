<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('product._components.form'); ?>
        <?php $__env->slot('title'); ?> 
        <?php echo e(__('views.section') . " " . __('views.Product')); ?>

        <?php $__env->endSlot(); ?>
        
        <?php $__env->slot('action'); ?>
        action="<?php echo e(route('product.update', $product->id)); ?>"
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('method'); ?> <?php echo method_field('PUT'); ?> <?php $__env->endSlot(); ?>

        <?php $__env->slot('photo'); ?>
        <img src="<?php echo e(asset('storage/images/' . $product->urlfoto)); ?>" alt="" width="65">
        <input type="file" name="urlfoto" class="form-control" value="<?php echo e($product->urlfoto); ?>">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('name'); ?>
        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $product->name)); ?>">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('price'); ?>
        <input type="text" name="price" class="form-control" value="<?php echo e(old('price', $product->price)); ?>">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('stock'); ?>
        <input type="number" name="stock" class="form-control" value="<?php echo e(old('stock', $product->stock)); ?>">
        <?php $__env->endSlot(); ?>

        <?php $__env->slot('categoria'); ?>
        <option value="<?php echo e($product->category->id); ?>" selected><?php echo e($product->category->name); ?></option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/product/edit.blade.php ENDPATH**/ ?>