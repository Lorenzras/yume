<li class="sidebar-menu-item <?php echo e(activeClass('companies')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('companies')); ?>">
    <span class="sidebar-menu-text">Companies</span>
    <span class="badge badge-primary ml-auto">NEW</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('stories')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('stories')); ?>">
    <span class="sidebar-menu-text">Stories</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('discussions')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('discussions')); ?>">
    <span class="sidebar-menu-text">Discussions</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('invoice')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('invoice')); ?>">
    <span class="sidebar-menu-text">Invoice</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('pricing')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('pricing')); ?>">
    <span class="sidebar-menu-text">Pricing</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('edit-account')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('edit-account')); ?>">
    <span class="sidebar-menu-text">Edit Account</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('profile')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('profile')); ?>">
    <span class="sidebar-menu-text">User Profile</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('payout')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('payout')); ?>">
    <span class="sidebar-menu-text">Payout</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('digital-product')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('digital-product')); ?>">
    <span class="sidebar-menu-text">Digital Product</span>
    <span class="badge badge-primary ml-auto">NEW</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('product-listing')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('product-listing')); ?>">
    <span class="sidebar-menu-text">Product Listing</span>
    <span class="badge badge-primary ml-auto">NEW</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('blank')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('blank')); ?>">
    <span class="sidebar-menu-text">Blank Page</span>
    <span class="badge badge-primary ml-auto">NEW</span>
  </a>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('login')); ?>">
  <?php if(auth()->guard()->guest()): ?>
  <a class="sidebar-menu-button" href="<?php echo e(route('login')); ?>">
    <span class="sidebar-menu-text">Login / Background Image</span>
  </a>
  <?php else: ?>
  <a class="sidebar-menu-button" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <span class="sidebar-menu-text">Login / Background Image</span>
  </a>
  <?php endif; ?>
</li>
<li class="sidebar-menu-item <?php echo e(activeClass('register')); ?>">
  <a class="sidebar-menu-button" href="<?php echo e(route('register')); ?>">
    <span class="sidebar-menu-text">Sign Up / Background Image</span>
  </a>
</li><?php /**PATH D:\xampp\htdocs\Laravel\yume\resources\views/vendor/flowdash/partials/pages-sidebar-menu.blade.php ENDPATH**/ ?>