<?php if(auth()->guard()->check()): ?>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
  </form>
<?php endif; ?>

<!-- Scripts -->
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/partials/footer.blade.php ENDPATH**/ ?>