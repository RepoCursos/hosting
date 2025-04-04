<?php $__env->startSection('title', 'Product'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <a href="" class="btn btn-success">CREATE PRODUCT</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">PHOTO</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">STOCK</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td scope="row">image</td>
                            <td>Mark</td>
                            <td>$ 11111</td>
                            <td>11</td>
                            <td>1-Categorya</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/inicio.blade.php ENDPATH**/ ?>