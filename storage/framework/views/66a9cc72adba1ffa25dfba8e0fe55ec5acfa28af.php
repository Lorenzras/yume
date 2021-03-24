<?php $__env->startSection('content'); ?>
<div class="<?php echo e($containerClass); ?> page__container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header card-header-large bg-white">
          <h4 class="card-header__title">Pins</h4>
        </div>
        <div class="card-body">
          <div
            class="map"  
            data-toggle="vector-map" 
            data-vector-map-map="world_en"
            data-vector-map-show-tooltip="false"
            data-vector-map-enable-zoom="true"
            data-vector-map-pins='{
              "it": "<div class=\"map-pin blue\"><span>Vatican City</span></div>",
              "us": "<div class=\"map-pin blue\"><span>New York</span></div>",
              "jp": "<div class=\"map-pin blue\"><span>Tokyo</span></div>"
            }'>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header card-header-large bg-white">
          <h4 class="card-header__title">Gross domestic product (GDP) by country</h4>
        </div>
        <div class="card-body">
          <div
            class="map"  
            data-toggle="vector-map" 
            data-vector-map-values="gdp"
            data-vector-map-map="world_en">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header card-header-large bg-white">
          <h4 class="card-header__title">Scale and focus</h4>
        </div>
        <div class="card-header card-header-tabs-basic nav" role="tablist">
          <div 
            data-toggle="vector-map-focus" 
            data-target="#vector-map-focus" 
            data-focus="it" 
            data-animate="true">
            <a href="javascript:void(0)" class="active" data-toggle="tab" role="tab" aria-selected="true">Italy</a>
          </div>
          <div 
            data-toggle="vector-map-focus" 
            data-target="#vector-map-focus" 
            data-focus="jp" 
            data-animate="true">
            <a href="javascript:void(0)" data-toggle="tab" role="tab" aria-selected="false">Japan</a>
          </div>
          <div 
            data-toggle="vector-map-focus" 
            data-target="#vector-map-focus" 
            data-focus='["it","jp"]' 
            data-animate="true">
            <a href="javascript:void(0)" data-toggle="tab" role="tab" aria-selected="false">United States &amp; Italy</a>
          </div>
        </div>
        <div class="card-body">
          <div
            id="vector-map-focus"
            class="map"  
            data-toggle="vector-map" 
            data-vector-map-map="world_en"
            data-vector-map-show-tooltip="false"
            data-vector-map-enable-zoom="false"
            data-vector-map-scale="1.2"
            data-vector-map-focus="it"
            data-vector-map-pins='{
              "it": "<div class=\"map-pin blue\"><span>Vatican City</span></div>",
              "us": "<div class=\"map-pin blue\"><span>New York</span></div>",
              "jp": "<div class=\"map-pin blue\"><span>Tokyo</span></div>"
            }'>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header card-header-large bg-white">
          <h4 class="card-header__title">Custom map - Mall</h4>
        </div>
        <div class="card-body">
          <div
            class="map"  
            data-toggle="vector-map"
            data-vector-map-map="mall"
            data-vector-map-values="mall"
            data-vector-map-enable-zoom="true"
            data-vector-map-scale="1"
            data-vector-map-values-colors='{
              "FASHION": "#2761ad",
              "LINGERIE & UNDERWEAR": "#d58aa3",
              "BEAUTY & SPA": "success.500",
              "URBAN FAVORITES": "primary.900",
              "SPORTS & OUTDOOR": "success.500",
              "KIDS STUFF": "success.300",
              "ENTERTAINMENT": "success.500",
              "HOME DECOR": "gray.400",
              "LIFESTYLE": "gray.300",
              "DINING": "success.500",
              "REST ROOMS": "gray.700",
              "SERVICES": "gray.300",
              "OTHER": "gray.500"
            }'>
          </div>
          Example of custom map created from SVG using converter available <a href="http://svgto.jvectormap.com/" target="_blank">here</a>.
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<!-- Vector Maps -->
<link rel="stylesheet" href="<?php echo e(mix('vendor/jqvmap/jqvmap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<!-- Theme Colors -->
<script src="<?php echo e(mix('js/settings.js')); ?>" defer></script>

<!-- Vector Maps -->
<script src="<?php echo e(mix('vendor/jqvmap/jquery.vmap.min.js')); ?>" defer></script>
<script src="<?php echo e(mix('vendor/jqvmap/maps/jquery.vmap.world.js')); ?>" defer></script>

<script src="<?php echo e(asset('assets/data/vector-maps/mall-map.js')); ?>" defer></script>
<script src="<?php echo e(asset('assets/data/vector-maps/gdp-data.js')); ?>" defer></script>

<script src="<?php echo e(mix('js/vector-maps.js')); ?>" defer></script>
<script src="<?php echo e(mix('js/page.ui-vector-maps.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("flowdash::layouts.{$layout}", [
  'title' => 'Vector Maps',
  'breadcrumb' => [[
    'title' => 'UI Components'
  ], [
    'title' => 'Vector Maps'
  ]],
  'new_button_label' => false
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/ui-vector-maps.blade.php ENDPATH**/ ?>