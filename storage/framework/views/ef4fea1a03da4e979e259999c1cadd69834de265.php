<nav aria-label="Page navigation example">
  <ul class="pagination <?php echo e($align ?? 'left' === 'center' ? 'justify-content-center' : ''); ?> <?php echo e($align ?? 'left' === 'right' ? 'justify-content-end' : ''); ?> pagination-sm <?php echo e($class ?? ''); ?>">
    <?php if($first ?? false !== false): ?>
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true" class="material-icons">first_page</span>
        <span class="<?php echo e($labels ?? false ? '' : 'sr-only'); ?>">First</span>
      </a>
    </li>
    <?php endif; ?>
    <?php if($prev ?? true !== false): ?>
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true" class="material-icons">chevron_left</span>
        <span class="<?php echo e($labels ?? false ? '' : 'sr-only'); ?>">Prev</span>
      </a>
    </li>
    <?php endif; ?>
    <?php for($page=1;$page<=($pages ?? 2);$page++): ?>
    <li class="page-item <?php echo e($page === 1 ? 'active' : ''); ?>">
      <a class="page-link" href="#" aria-label="<?php echo e($page); ?>">
        <span><?php echo e($page); ?></span>
      </a>
    </li>
    <?php endfor; ?>
    <?php if($next ?? true !== false): ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span class="<?php echo e($labels ?? false ? '' : 'sr-only'); ?>">Next</span>
        <span aria-hidden="true" class="material-icons">chevron_right</span>
      </a>
    </li>
    <?php endif; ?>
    <?php if($last ?? false !== false): ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span class="<?php echo e($labels ?? false ? '' : 'sr-only'); ?>">Last</span>
        <span aria-hidden="true" class="material-icons">last_page</span>
      </a>
    </li>
    <?php endif; ?>
  </ul>
</nav><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/components/pagination.blade.php ENDPATH**/ ?>