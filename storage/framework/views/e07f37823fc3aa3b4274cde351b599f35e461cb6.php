<?php $__env->startSection('content'); ?>

    <?php if(!Auth::user()): ?>
        yyyy
    <?php elseif(Auth::user()->isDisabled()): ?>
        You are not Active
    <?php elseif(Auth::user()->isVisitor()): ?>
        Welcome user
    <?php elseif(Auth::user()->isAdmin()): ?>
        <a href="<?php echo e(route('shirts.create')); ?>" class="btn btn-success">Success</a>
    <?php endif; ?>

<h1>pants</h1>


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
    <?php $__currentLoopData = $pants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <th scope="row"><img src="<?php echo e(asset('storage/'.$pant->image)); ?>" width="100px" height="50px"></th>
        <td><?php echo e($pant->name); ?></td>
        <td><?php echo e($pant->description); ?></td>
        <td><?php echo e($pant->price); ?></td>
        <td><a  href="<?php echo e(route('shirts.show' , ['shirt'=> $pant->id])); ?>"   type="button" class="btn btn-warning">view</a></td>
        <?php if(!Auth::user()): ?>
            <td>sign now</td>
        <?php elseif(Auth::user()->isDisabled()): ?>
            <td>hiden now</td>
        <?php elseif(Auth::user()->isVisitor()): ?>
            <td>out now</td>
        <?php elseif(Auth::user()->isAdmin()): ?>
            <td><a  href="<?php echo e(route('pants.edit' , ['pant'=> $pant->id])); ?>"   type="button" class="btn btn-warning">edit</a></td>
        <?php endif; ?>

    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/pants/index.blade.php ENDPATH**/ ?>