<?php if($errors->any()): ?>
    <div <?php echo e($attributes->merge(['class' => 'alert alert-soft-danger'])); ?>>
        <p class="text-body font-weight-bold"><?php echo e(__('Whoops! Something went wrong.')); ?></p>

        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>