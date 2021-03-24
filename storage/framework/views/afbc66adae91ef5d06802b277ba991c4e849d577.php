<?php
$badgeLabel = $badgeLabel ?? 'OPEN';
$badgeClass = $badgeClass ?? 'badge-light-gray';
$title = $title ?? 'Add UI Buttons Page';
$comments = $comments ?? 28;
$assigned = $assigned ?? '';
$avatarGroup = $avatarGroup ?? false;
$avatars = $avatars ?? [
  "vendor/flowdash/images/256_rsz_1andy-lee-642320-unsplash.jpg",
  "vendor/flowdash/images/256_michael-dam-258165-unsplash.jpg",
  "vendor/flowdash/images/256_luke-porter-261779-unsplash.jpg"
];
$avatarCount = count($avatars);
?>

<div class="trello-board__tasks-item card shadow-none border">
  <div class="p-3">
    <p class="m-0 d-flex align-items-center">
      <strong><?php echo e($title); ?></strong> <span class="badge <?php echo e($badgeClass); ?> ml-auto"><?php echo e($badgeLabel); ?></span></p>
    
    <p class="d-flex align-items-center mb-2 small">
      <i class="material-icons icon-14pt mr-1 text-muted">folder_open</i>
      <span class="text-muted mr-2">Stack</span>
      <i class="material-icons icon-14pt mr-1 text-muted">comment</i>
      <span class="text-muted"><strong><?php echo e($comments); ?></strong> comments</span>
    </p>
    <div class="media align-items-center">
      <div class="media-left mr-2 <?php echo e($avatarGroup ? 'avatar-group' : ''); ?>">
        <?php for($avatar=0;$avatar<=($avatarCount-1);$avatar++): ?>
        <div class="avatar avatar-xxs" data-toggle="tooltip" data-placement="top" title="Janell D.">
          <img src="<?php echo e(asset($avatars[$avatar])); ?>" alt="Avatar" class="avatar-img rounded-circle">
        </div>
        <?php endfor; ?>
      </div>
      <div class="media-body small media-middle">
        <?php if($avatarCount > 1): ?>
        <a href="">+<?php echo e(($avatarCount - 1)); ?> more</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/components/trello-task.blade.php ENDPATH**/ ?>