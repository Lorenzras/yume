<li class="sidebar-menu-item <?php echo e(($layout ?? '') === 'default' ? 'active' : ''); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route(Route::currentRouteName(), ['layout' => 'default'])); ?>">
    <span class="sidebar-menu-text">Default</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(($layout ?? '') === 'fluid' ? 'active' : ''); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route(Route::currentRouteName(), ['layout' => 'fluid'])); ?>">
    <span class="sidebar-menu-text">Full Width Navs</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(($layout ?? '') === 'fixed' ? 'active' : ''); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route(Route::currentRouteName(), ['layout' => 'fixed'])); ?>">
    <span class="sidebar-menu-text">Fixed Navs</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(($layout ?? '') === 'mini' ? 'active' : ''); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route(Route::currentRouteName(), ['layout' => 'mini'])); ?>">
    <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
  </a>
</li><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/partials/layouts-sidebar-menu.blade.php ENDPATH**/ ?>