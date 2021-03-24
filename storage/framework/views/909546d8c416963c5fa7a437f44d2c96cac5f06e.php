<p class="text-dark-gray d-flex align-items-center mt-3">
  <i class="material-icons icon-muted mr-2">event</i>
  <strong>Wednesday, 24 Oct</strong>
</p>

<?php
$items1 = [[
  'time' => "12:30 PM",
  'title' => "#4813 - Fix email alignment on iPhone 7",
  'badge_label' => "NEW",
  'badge_class' => "badge-light-gray",
  'started_by' => "Michael S.",
  'tag' => "DEPLOYED",
  'assigned_image' => "vendor/flowdash/images/256_daniel-gaffey-1060698-unsplash.jpg",
  'assigned' => "Sherri Cardenas"
], [
  'time' => "07:48 PM",
  'title' => "#4813 - Create account profile page",
  'badge_label' => "RESOLVED",
  'badge_class' => "badge-success",
  'started_by' => "Adrian D.",
  'tag' => "CONCEPT",
  'assigned_image' => "vendor/flowdash/images/256_rsz_1andy-lee-642320-unsplash.jpg",
  'assigned' => "Jenell Matney"
], [
  'time' => "03:13 PM",
  'title' => "#4811 - Design new Dashboard",
  'badge_label' => "PRO",
  'badge_class' => "badge-warning",
  'started_by' => "John L.",
  'tag' => "WIREFRAME",
  'assigned_image' => "vendor/flowdash/images/256_jeremy-banks-798787-unsplash.jpg",
  'assigned' => "Joseph Ferland"
], [
  'time' => "12:30 PM",
  'title' => "#4901 - Design Pricing Table",
  'badge_label' => "NEW",
  'badge_class' => "badge-light-gray",
  'started_by' => "Michael S.",
  'tag' => "DEPLOYED",
  'assigned_image' => "vendor/flowdash/images/256_joao-silas-636453-unsplash.jpg",
  'assigned' => "Bryan Davis"
]]
?>

<?php $__currentLoopData = $items1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->startComponent('flowdash::components.project-activity-item', [
    'time' => $item['time'],
    'title' => $item['title'],
    'badge_label' => $item['badge_label'],
    'badge_class' => $item['badge_class'],
    'started_by' => $item['started_by'],
    'tag' => $item['tag'],
    'assigned_image' => $item['assigned_image'],
    'assigned' => $item['assigned']
  ]); ?> <?php if (isset($__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd)): ?>
<?php $component = $__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd; ?>
<?php unset($__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<p class="text-dark-gray d-flex align-items-center mt-3">
  <i class="material-icons icon-muted mr-2">event</i>
  <strong>Tuesday, 23 Oct</strong>
</p>

<?php
$items2 = [[
  'time' => "07:48 PM",
  'title' => "#4923 - Fix spacings on Stories page",
  'badge_label' => "RESOLVED",
  'badge_class' => "badge-success",
  'started_by' => "Adrian D.",
  'tag' => "CONCEPT",
  'assigned_image' => "vendor/flowdash/images/256_luke-porter-261779-unsplash.jpg",
  'assigned' => "Elizabeth Ohara"
], [
  'time' => "03:13 PM",
  'title' => "#4813 - Fix email alignment on iPhone 7",
  'badge_label' => "NEW",
  'badge_class' => "badge-light-gray",
  'started_by' => "John L.",
  'tag' => "WIREFRAME",
  'assigned_image' => "vendor/flowdash/images/256_michael-dam-258165-unsplash.jpg",
  'assigned' => "Kaci Langston"
]]
?>

<?php $__currentLoopData = $items2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->startComponent('flowdash::components.project-activity-item', [
    'time' => $item['time'],
    'title' => $item['title'],
    'badge_label' => $item['badge_label'],
    'badge_class' => $item['badge_class'],
    'started_by' => $item['started_by'],
    'tag' => $item['tag'],
    'assigned_image' => $item['assigned_image'],
    'assigned' => $item['assigned']
  ]); ?> <?php if (isset($__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd)): ?>
<?php $component = $__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd; ?>
<?php unset($__componentOriginal216550fa87bb8a757a9b312e8e5ad5cfd16358cd); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="mt-4">
  <?php $__env->startComponent('flowdash::components.pagination', [
    'pages' => 4, 
    'first' => true, 
    'last' => true, 
    'align' => 'center'
  ]); ?> <?php if (isset($__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5)): ?>
<?php $component = $__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5; ?>
<?php unset($__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
</div><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/partials/app-projects.blade.php ENDPATH**/ ?>