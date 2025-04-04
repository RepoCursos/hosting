<?php $__env->startSection('title', 'Product'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row justify-content-center">
      <div class="col-sm-8">
        <form class="row g-3">
          <div class="col-auto">
              <label class="visually-hidden">PHOTO</label>
              <input type="text" class="form-control-plaintext" value="photo">
            </div>
          <div class="col-auto">
            <label class="visually-hidden">NAME</label>
            <input type="text" class="form-control-plaintext" value="name">
          </div>
          <div class="col-auto">
            <label class="visually-hidden">DESCRIPTION</label>
            <input type="text" class="form-control-plaintext" value="description">
          </div>
          <div class="col-auto">
            <label class="visually-hidden">PRICE</label>
            <input type="number" class="form-control" id="inputPassword2" value="price">
          </div>
          <div class="col-auto">
            <label class="visually-hidden">STOCK</label>
            <input type="number" class="form-control" id="inputPassword2" value="stock">
          </div>
          <div class="col-auto">
            <label class="visually-hidden">CATEGORY</label>
            <input type="number" class="form-control" id="inputPassword2" value="category">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">UPDATE</button>
            <a href="" class="btn btn-outline-primary">CANCEL</a>
          </div>
      </form>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/create.blade.php ENDPATH**/ ?>