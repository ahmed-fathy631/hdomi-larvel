<?php $__env->startSection('content'); ?>


    <h1>shirts</h1>



    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">-</th>
        </tr>
        </thead>
        <tbody>


            <tr>
                <th scope="row"><img src="<?php echo e(asset('storage/'.$shirt->image)); ?>" width="100px" height="50px"></th>
                <td><?php echo e($shirt->name); ?></td>
                <td><?php echo e($shirt->description); ?></td>
                <td><?php echo e($shirt->price); ?></td>

            </tr>


        </tbody>
    </table>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/show.blade.php ENDPATH**/ ?>