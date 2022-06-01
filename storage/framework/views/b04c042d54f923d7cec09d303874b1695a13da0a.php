<html>
    <head></head>
    <body>
        <div>
        <a href="/">Home</a>
        <a href="/welcome">Welcome</a>
        <a href="<?php echo e(route('student.list')); ?>">List</a>

        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\Users\Asif\Desktop\webTech\Lab_task_Adwebtech\lab1\resources\views/layouts/main.blade.php ENDPATH**/ ?>