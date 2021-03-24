<?php $__env->startSection('content'); ?>
<div class="<?php echo e($containerClass ?? 'container'); ?> page__container">
  <div id="app-icons">
    <app-icons-app></app-icons-app>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<!-- UI Icons Page JS -->
<script src="<?php echo e(mix('js/app-icons.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("flowdash::layouts.{$layout}", [
  'title' => 'Icons',
  'breadcrumb' => [[
    'title' => 'UI Components'
  ], [
    'title' => 'Icons'
  ]],
  'new_button_label' => false
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/ui-icons.blade.php ENDPATH**/ ?>