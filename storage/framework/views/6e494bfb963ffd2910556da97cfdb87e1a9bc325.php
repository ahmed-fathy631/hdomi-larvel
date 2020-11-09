<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('shirts.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputname">name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputdescription">description</label>
          <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputprice">price</label>
            <input type="number" name="price" class="form-control" >
        </div>


        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file"  name="image" class="form-control-file" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/create.blade.php ENDPATH**/ ?>