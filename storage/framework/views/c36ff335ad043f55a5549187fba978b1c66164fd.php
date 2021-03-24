<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(config('flowdash.rtl') ? 'rtl' : 'ltr'); ?>">
<head>
    <?php echo $__env->make('flowdash::partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php
    $layout = 'default';
    $navbarContainerClass = $navbarContainerClass ?? 'container-fluid';
    $drawerFile = $drawerFile ?? 'drawer';
    $dashboards_menu = request()->routeIs(['home', 'analytics', 'quick-access', 'staff', 'ecommerce']);
    $apps_menu = request()->routeIs(['app-trello', 'app-projects', 'app-activities', 'app-fullcalendar', 'app-chat', 'app-email', 'app-browse-courses', 'app-course', 'app-lesson']);
    $pages_menu = request()->routeIs(['companies', 'stories', 'discussions', 'product-listing', 'payout', 'invoice', 'pricing', 'edit-account', 'blank', 'profile', 'digital-product', 'login', 'register']);
    $components_menu = request()->routeIs(['ui-buttons', 'ui-alerts', 'ui-avatars', 'ui-modals', 'ui-charts', 'ui-icons', 'ui-forms', 'ui-range-sliders', 'ui-datetime', 'ui-tables', 'ui-tabs', 'ui-loaders', 'ui-drag', 'ui-pagination', 'ui-vector-maps']);
?>

<body class="layout-default <?php echo e($bodyClass ?? ''); ?>">

    <?php echo $__env->make('flowdash::partials.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->
        <?php if($header ?? true !== false): ?>
        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">
                <?php if($navbar ?? true !== false): ?>
                    <?php echo $__env->make('flowdash::partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

          <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page <?php echo e($pageContentClass ?? ''); ?>">

                <?php if(auth()->guard()->check()): ?>
                    <?php if($user_header ?? true !== false): ?>
                        <?php echo $__env->make('flowdash::partials.user-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- // END drawer-layout__content -->

            <?php echo $__env->make("flowdash::partials.{$drawerFile}", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->
    
    

    <?php echo $__env->make('flowdash::partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/layouts/default.blade.php ENDPATH**/ ?>