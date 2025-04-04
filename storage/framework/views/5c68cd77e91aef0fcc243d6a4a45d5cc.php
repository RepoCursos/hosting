<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Para llamar y pintar la vista del componente le indicamos en donde se encuentra -->
    <!-- ubicacion del componente -->
    <?php $__env->startComponent('category._components.form'); ?>
        <!-- en este slot llamamos a la variable $title para idicarle que mostrar -->
        <?php $__env->slot('title'); ?>
        <?php echo e(__('views.section') . " " . __('views.category')); ?>

        <?php $__env->endSlot(); ?>
        <!-- llamamos al slot action para indicar su configuracion -->
        <?php $__env->slot('action'); ?>
            action="<?php echo e(route('category.update', $category->id)); ?>"
        <?php $__env->endSlot(); ?>
        <!-- indicamos el method cual va a ser su valor a modificar -->
        <?php $__env->slot('method'); ?>
            <?php echo method_field('PUT'); ?>
        <?php $__env->endSlot(); ?>
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        <?php $__env->slot('slug'); ?>
            <?php if(isset($category)): ?>
                value="<?php echo e(old('slug', $category->slug)); ?>"
            <?php endif; ?>
        <?php $__env->endSlot(); ?>
        <!-- llamamos al metodo old para que no borre todo lo escrito si da un error en el completado del 
            formulario-->
        <?php $__env->slot('name'); ?>
            <?php if(isset($category)): ?>
                value="<?php echo e(old('name', $category->name)); ?>"
            <?php endif; ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/category/edit.blade.php ENDPATH**/ ?>