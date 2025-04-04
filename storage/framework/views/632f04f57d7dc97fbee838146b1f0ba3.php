<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('category._components.form'); ?>
        <?php $__env->slot('title'); ?>
            <?php echo e(__('views.section') . " " . __('views.category')); ?>

        <?php $__env->endSlot(); ?>
        <?php $__env->slot('action'); ?>
            action="<?php echo e(route('category.store')); ?>"
        <?php $__env->endSlot(); ?>
        <!-- llamamos al slot method pero no le indicamos nada ya que no tiene que ser modificado pero 
            sino lo llamamos nos da error -->
        <?php $__env->slot('method'); ?>
        <?php $__env->endSlot(); ?>
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        <?php $__env->slot('slug'); ?>
            value="<?php echo e(old('slug')); ?>"
        <?php $__env->endSlot(); ?>
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        <?php $__env->slot('name'); ?>
            value="<?php echo e(old('name')); ?>"
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/category/create.blade.php ENDPATH**/ ?>