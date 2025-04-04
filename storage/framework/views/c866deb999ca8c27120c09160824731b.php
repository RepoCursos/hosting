<!-- ESTO ES UN COMPONENTE -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <!-- Forma de mostrar el error de forma general -->
            <?php if($errors->any()): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <!-- ************************************************************ -->

            <!-- A menudo necesitarás pasar contenido adicional a tu componente a través de "ranuras".
                Las ranuras de los componentes se representan haciendo eco de la variable $slot.
                En los slot se representan como el ejemplo $title -->
            <h2><?php echo e($title); ?></h2>
            <form method="POST" <?php echo e($action); ?>>
                <?php echo e($method); ?>

                <?php echo csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="slug" class="col-sm-2 col-form-label">SLUG</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="slug" <?php echo e($slug); ?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label"><?php echo e(__('views.name')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" <?php echo e($name); ?>>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" class="btn btn-primary" value="<?php echo e(__('views.save')); ?>">
                    <a href="<?php echo e(route('category.index')); ?>" class="btn btn-danger"><?php echo e(__('views.cancel')); ?></a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /app/resources/views/category/_components/form.blade.php ENDPATH**/ ?>