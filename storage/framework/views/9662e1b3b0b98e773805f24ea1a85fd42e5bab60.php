<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('product')); ?>">Products</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('team')); ?>">Our Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('aboutus')); ?>">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('contactus')); ?>">Contact Us</a>
        </li>
        
      </ul>
      

    <?php echo $__env->yieldContent('contain'); ?>;

    
</body>
</html><?php /**PATH C:\Users\Asif\Desktop\webTech\Lab_task_Adwebtech\lab1\resources\views/layouts/app.blade.php ENDPATH**/ ?>