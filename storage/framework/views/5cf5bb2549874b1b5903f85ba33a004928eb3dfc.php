<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(config('flowdash.rtl') ? 'rtl' : 'ltr'); ?>">
<head>
    <?php echo $__env->make('flowdash::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php
    $layout = 'default';
?>

<body class="<?php echo e($bodyClass ?? 'layout-fluid'); ?>">

  <?php echo $__env->make('flowdash::partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('flowdash::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('footer'); ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/layouts/blank.blade.php ENDPATH**/ ?>