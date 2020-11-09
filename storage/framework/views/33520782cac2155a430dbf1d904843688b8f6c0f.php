<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('shirts.update', $shirt->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="exampleInputname">name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($shirt->name); ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputdescription">description</label>
            <textarea class="form-control" name="description" value="<?php echo e($shirt->description); ?>"><?php echo e($shirt->description); ?></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputprice">price</label>
            <input type="number" name="price" class="form-control" value="<?php echo e($shirt->price); ?>" >
        </div>


        <div class="form-group">
            <img src="<?php echo e(asset('storage/'.$shirt->image)); ?>" width="100px" height="50px">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file"  name="image" class="form-control-file" value="<?php echo e($shirt->image); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <form  method="POST" action='<?php echo e(route('shirts.destroy',['shirt' => $shirt->id])); ?>'>

        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <button type="submit" class="btn btn-danger">Delet</button>
    </form>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/edit.blade.php ENDPATH**/ ?>