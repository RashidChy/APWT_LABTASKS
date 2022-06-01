<?php $__env->startSection('contain'); ?>

<table border="2">
    <th>ID</th>
    <th>Name</th>
    <th>DOB</th>

    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->price); ?></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asif\Desktop\webTech\Lab_task_Adwebtech\lab1\resources\views/pages/product.blade.php ENDPATH**/ ?>