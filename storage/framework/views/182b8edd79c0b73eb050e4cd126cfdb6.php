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
            <h2><?php echo e($title); ?></h2>
            <form method="POST" <?php echo e($action); ?> enctype="multipart/form-data">
                <?php echo e($method); ?>

                <?php echo csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="file" class="col-sm-2 col-form-label"><?php echo e(__('views.photo')); ?></label>
                    <div class="col-sm-10">
                        <?php echo e($photo); ?>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label"><?php echo e(__('views.name')); ?></label>
                    <div class="col-sm-10">
                        <?php echo e($name); ?>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label"><?php echo e(__('views.price')); ?></label>
                    <div class="col-sm-10">
                        <?php echo e($price); ?>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stock" class="col-sm-2 col-form-label"><?php echo e(__('views.stock')); ?></label>
                    <div class="col-sm-10">
                        <?php echo e($stock); ?>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="category_id" class="col-sm-2 col-form-label"><?php echo e(__('views.Category')); ?></label>
                    <div class="col-sm-10">
                        <select name="category_id" id="" class="form-control">
                            <?php echo e($categoria); ?>

                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" class="btn btn-primary" value="<?php echo e(__('views.save')); ?>">
                    <a href="<?php echo e(route('product.index')); ?>" class="btn btn-danger"><?php echo e(__('views.cancel')); ?></a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /app/resources/views/product/_components/form.blade.php ENDPATH**/ ?>