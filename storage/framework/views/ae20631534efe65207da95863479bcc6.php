<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h2><?php echo e($title); ?></h2>
            <form method="POST" <?php echo e($action); ?> >
                <?php echo e($method); ?>

                <?php echo csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="slug" class="col-sm-2 col-form-label">SLUG</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="slug" <?php echo e($slug); ?> >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" <?php echo e($name); ?> >
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <a href="<?php echo e(route('category.index')); ?>" class="btn btn-danger">CANCEL</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /app/resources/views/category/form.blade.php ENDPATH**/ ?>