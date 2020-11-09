<?php $__env->startSection('content'); ?>

    <?php if(!Auth::user()): ?>

    <?php elseif(Auth::user()->isDisabled()): ?>

    <?php elseif(Auth::user()->isVisitor()): ?>

    <?php elseif(Auth::user()->isAdmin()): ?>
        <a href="<?php echo e(route('shirts.create')); ?>" class="btn btn-success ml-5"  style="opacity: 0.7;"   >Add new shirts</a>
    <?php endif; ?>


    <div class="container mt-4">

        <?php $__currentLoopData = $shirts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shirt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="back3 mb-3 " >

               <img class=" img border"  src="<?php echo e(asset('storage/'.$shirt->image)); ?>" width="250px" height="150px">

                <div class="float-right mr-5" style="width:500px; ">

                <p class="bold mt-4"><?php echo e($shirt->name); ?></p>

                <p class="bold" ><?php echo e($shirt->price); ?>  L.E</p>

                <a  href="<?php echo e(route('shirts.show' , ['shirt'=> $shirt->id])); ?>"   type="button" class="btn btn-warning"   style="width: 100px;opacity: 0.5;" >View</a>

                <?php if(!Auth::user()): ?>

                <?php elseif(Auth::user()->isDisabled()): ?>

                <?php elseif(Auth::user()->isVisitor()): ?>

                <?php elseif(Auth::user()->isAdmin()): ?>
                 <a  href="<?php echo e(route('shirts.edit' , ['shirt'=> $shirt->id])); ?>"   type="button" class="btn btn-danger" style="width: 100px;opacity: 0.5;" >Edit</a>
                <?php endif; ?>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/shirt/index.blade.php ENDPATH**/ ?>