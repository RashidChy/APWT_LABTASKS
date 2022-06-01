<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?php echo e('/' == request()->path() ? 'nav-link active' : 'nav-link'); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo e('product' == request()->path() ? 'nav-link active' : 'nav-link'); ?>" href="<?php echo e(route('product')); ?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo e('team' == request()->path() ? 'nav-link active' : 'nav-link'); ?>" href="<?php echo e(route('team')); ?>">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo e('aboutus' == request()->path() ? 'nav-link active' : 'nav-link'); ?>" href="<?php echo e(route('aboutus')); ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="<?php echo e('contactus' == request()->path() ? 'nav-link active' : 'nav-link'); ?>" href="<?php echo e(route('contactus')); ?>">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\Users\Asif\Desktop\webTech\Lab_task_Adwebtech\lab1\resources\views/inc/nav.blade.php ENDPATH**/ ?>