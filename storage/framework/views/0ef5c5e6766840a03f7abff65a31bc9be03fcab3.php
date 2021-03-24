<?php if($layout === 'fluid'): ?>
<div class="page__header">
<?php endif; ?>

<?php if(request()->routeIs('staff')): ?>
<div class="bg-white border-bottom">
  <div class="<?php echo e($containerClass ?? 'container'); ?> page__container">
    <div class="card-header-tabs-basic nav" role="tablist">
      <a href="#" class="active">All</a>
      <a href="#">Pro</a>
      <a href="#">Active</a>
      <a href="#">Temporary</a>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="<?php echo e($containerClass ?? 'container'); ?> page__heading-container">
  <div class="page__heading d-flex align-items-center">
    <div class="flex">

      <?php if($breadcrumb ?? []): ?>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <?php $__currentLoopData = $breadcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="breadcrumb-item <?php if($loop->last): ?> active <?php endif; ?>">
            <?php if($loop->last): ?>
              <?php echo e($item['title']); ?>

            <?php else: ?>
              <a href="<?php echo e($item['slug'] ?? ''); ?>"><?php echo e($item['title']); ?></a>
            <?php endif; ?>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
      </nav>
      <?php endif; ?>

      <h1 class="m-0"><?php echo e($title ?? ''); ?></h1>
    </div>
    <?php if($new_button_label ?? null !== false): ?>
    <a href="<?php echo e(url($new_button_slug ?? '/')); ?>" class="btn btn-<?php echo e($new_button_class ?? 'success'); ?> ml-3" <?php echo ($new_button_toggle ?? null) ? 'data-toggle="' . $new_button_toggle . '"' : ''; ?> <?php echo ($new_button_target ?? null) ? 'data-target="' . $new_button_target . '"' : ''; ?>>
      <?php if(isset($new_button_icon_label)): ?>
        <i class="material-icons icon-16pt <?php echo e($new_button_icon_class ?? ''); ?> mr-1"><?php echo e($new_button_icon_label ?? 'settings'); ?></i>
      <?php endif; ?>
      <?php echo e($new_button_label ?? 'New Report'); ?>

    </a>
    <?php endif; ?>
  </div>
</div>

<?php if($layout === 'fluid'): ?>
</div> <!-- // END page__header -->
<?php endif; ?><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/partials/user-header.blade.php ENDPATH**/ ?>