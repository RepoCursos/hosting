<?php $__env->startSection('title', 'Category'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h1 class="mt-3 mb-3 fs-4"><?php echo e(__('views.section') . " " . __('views.Category')); ?></h1>
                <a href="<?php echo e(route('category.create')); ?>" class="btn btn-success"><?php echo e(__('views.create') . " " . __('views.Category')); ?></a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SLUG</th>
                            <th><?php echo e(__('views.name')); ?></th>
                            <th><?php echo e(__('views.action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <!-- esta variable $i que utilizo es para que muestre el valor de la interacion y no el ID -->
                                <th><?php echo e($i + 1); ?></th>
                                <td><?php echo e($category->slug); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('category.edit', $category->id)); ?>" class="btn btn-primary"><?php echo e(__('views.edit')); ?></a>
                                </td>
                                <td>
                                    <form method="POST" action="<?php echo e(route('category.destroy', $category->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" value="<?php echo e(__('views.delete')); ?>" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4"><?php echo e(__('views.no_data')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/category/index.blade.php ENDPATH**/ ?>