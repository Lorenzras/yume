<?php $__env->startSection('content'); ?>
<?php
$activities = [[
  'avatar_image' => "vendor/flowdash/images/256_luke-porter-261779-unsplash.jpg",
  'assigned' => "Luke Porter",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_daniel-gaffey-1060698-unsplash.jpg",
  'assigned' => "Daniel Gaffery",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_jeremy-banks-798787-unsplash.jpg",
  'assigned' => "Jeremy Banks",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_joao-silas-636453-unsplash.jpg",
  'assigned' => "Francesca Silo",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_luke-porter-261779-unsplash.jpg",
  'assigned' => "Luke Porter",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_daniel-gaffey-1060698-unsplash.jpg",
  'assigned' => "Daniel Gaffery",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_jeremy-banks-798787-unsplash.jpg",
  'assigned' => "Jeremy Banks",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
], [
  'avatar_image' => "vendor/flowdash/images/256_joao-silas-636453-unsplash.jpg",
  'assigned' => "Francesca Silo",
  'email' => "contact@frontted.com",
  'meta' => "commented on ticket <a href='#'>#3292</a> ",
  'comment' => "What is the status on this ticket?",
  'time' => "5 min ago"
]];
?>

<div class="<?php echo e($containerClass ?? 'container'); ?> page__container">
  <div class="d-flex align-items-center">
    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
      <label class="btn btn-light active">
        <input type="radio" name="options" id="option1" checked=""> All
      </label>
      <label class="btn btn-light">
        <input type="radio" name="options" id="option2"><i class="material-icons text-muted-light">today</i> Events
      </label>
      <label class="btn btn-light">
        <input type="radio" name="options" id="option2"><i class="material-icons text-muted-light">work</i> Tickets
      </label>
      <label class="btn btn-light">
        <input type="radio" name="options" id="option2"><i class="material-icons text-muted-light">error</i> Issues
      </label>
      <label class="btn btn-light">
        <input type="radio" name="options" id="option2"><i class="material-icons text-muted-light">comment</i> Comments
      </label>
      <label class="btn btn-light">
        <input type="radio" name="options" id="option2"><i class="material-icons text-muted-light">account_circle</i> Staff
      </label>
    </div>
    
    <div class="ml-auto">
      <div class="d-flex">
        <div
          class="text-right"
          id="recent_orders_date"
          data-toggle="flatpickr" 
          data-flatpickr-wrap="true"
          data-flatpickr-static="true" 
          data-flatpickr-mode="range" 
          data-flatpickr-alt-format="d/m/Y" 
          data-flatpickr-date-format="d/m/Y">
          <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span class="text-muted">to</span> 20/03/2018</a>
          <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
        </div>
        <label for="" class="ml-1 text-muted"><i class="material-icons icon-18pt">today</i></label>
      </div>
    </div>
  </div>

  <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card p-3 mb-3">
    <div class="d-flex">
      <div class="flex-fill d-flex">
        <div class="avatar avatar-md mr-3" data-toggle="tooltip" data-placement="top" title="Luke P.">
          <img src="<?php echo e(asset($activity['avatar_image'])); ?>" alt="Avatar" class="avatar-img rounded-circle">
        </div>
        <div class="flex-fill">
          <div class="d-flex mb-2">
            <a href="#" class="text-body mr-1"><strong><?php echo e($activity['assigned']); ?></strong></a> <div class="text-muted"> <?php echo $activity['meta']; ?></div>
          </div>
          <div class="mb-2">
            <?php echo e($activity['comment']); ?>

          </div>
          <div class="">
            <span class="badge badge-soft-primary badge-pill mr-1">EVENTS</span><span class="badge badge-soft-purple badge-pill mr-1">TICKETS</span><span class="badge badge-soft-danger badge-pill mr-1">ISSUES</span>
          </div>
        </div>
      </div>
      <div class="text-muted"><?php echo e($activity['time']); ?></div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <div class="mt-4">
    <?php $__env->startComponent('flowdash::components.pagination', [
      'pages' => 3, 
      'first' => true, 
      'last' => true, 
      'align' => 'right'
    ]); ?> <?php if (isset($__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5)): ?>
<?php $component = $__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5; ?>
<?php unset($__componentOriginal8f1406602c447edd58a2dc0e65f26d3da25638e5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
  </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<!-- Flatpickr -->
<link type="text/css" href="<?php echo e(mix('css/vendor/flatpickr.css')); ?>" rel="stylesheet">
<link type="text/css" href="<?php echo e(mix('css/vendor/flatpickr-airbnb.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<!-- Flatpickr -->
<script src="<?php echo e(mix('vendor/flatpickr/flatpickr.min.js')); ?>" defer></script>
<script src="<?php echo e(mix('js/flatpickr.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("flowdash::layouts.{$layout}", [
  'title' => 'Activities',
  'breadcrumb' => [[
    'title' => 'Activities'
  ]],
  'new_button_label' => 'New Activity'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/app-activities.blade.php ENDPATH**/ ?>