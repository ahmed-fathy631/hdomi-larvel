<?php $__env->startSection('content'); ?>

    <?php if(!Auth::user()): ?>

    <?php elseif(Auth::user()->isDisabled()): ?>

    <?php elseif(Auth::user()->isVisitor()): ?>

    <?php elseif(Auth::user()->isAdmin()): ?>
        <a href="<?php echo e(route('trouseres.create')); ?>" class="btn btn-success ml-5"  style="opacity: 0.7;"   >Add new pants</a>
    <?php endif; ?>


    <div class="container mt-4">

        <?php $__currentLoopData = $trouseres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trousere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="back3 mb-3 " >

               <img class=" img border"  src="<?php echo e(asset('storage/'.$trousere->image)); ?>" width="250px" height="150px">

                <div class="float-right mr-5" style="width:500px; ">

                <p class="bold mt-4"><?php echo e($trousere->name); ?></p>

                <p class="bold" ><?php echo e($trousere->price); ?>  L.E</p>

                    <a  href="<?php echo e(route('trouseres.show' , ['trousere'=> $trousere->id])); ?>"   type="button" class="btn btn-warning"   style="width: 100px;opacity: 0.5;" >View</a>

                <?php if(!Auth::user()): ?>

                <?php elseif(Auth::user()->isDisabled()): ?>

                <?php elseif(Auth::user()->isVisitor()): ?>

                <?php elseif(Auth::user()->isAdmin()): ?>
                 <a  href="<?php echo e(route('trouseres.edit' , ['trousere'=> $trousere->id])); ?>"    type="button" class="btn btn-danger" style="width: 100px;opacity: 0.5;" >Edit</a>
                <?php endif; ?>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/pant/index.blade.php ENDPATH**/ ?>