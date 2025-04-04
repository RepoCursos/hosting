<?php $__env->startSection('title', 'Product'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="mt-3 mb-3 fs-4"><?php echo e(__('views.section') . " " . __('views.Product')); ?></h1>
                <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success"><?php echo e(__('views.create') . " " . __('views.Product')); ?></a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo e(__('views.photo')); ?></th>
                            <th scope="col"><?php echo e(__('views.name')); ?></th>
                            <th scope="col"><?php echo e(__('views.price')); ?></th>
                            <th scope="col"><?php echo e(__('views.stock')); ?></th>
                            <th scope="col"><?php echo e(__('views.category')); ?></th>
                            <th scope="col"><?php echo e(__('views.action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th><?php echo e($i + 1); ?></th>
                            <!-- para acceder a las imagenes tenemos que acceder a la ruta atravez de la directiva asset() -->
                            <td scope="row"><img src="<?php echo e(asset('storage/images/' . $product->urlfoto )); ?>" alt="" width="65"></td>
                            <td><?php echo e($product->name); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->stock); ?></td>
                            <td><?php echo e($product->category->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="btn btn-primary"><?php echo e(__('views.edit')); ?></a>
                            </td>
                            <td>
                                <form method="POST" action="<?php echo e(route('product.destroy', $product->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="submit" value="<?php echo e(__('views.delete')); ?>" class="btn btn-danger" >
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/product/index.blade.php ENDPATH**/ ?>