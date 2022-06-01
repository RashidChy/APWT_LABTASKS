<?php $__env->startSection('content'); ?>
   
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="<?php echo e(route('student.details',['id'=>$s->id,'name'=>$s->name])); ?>"><?php echo e($s->name); ?></a></td>
                <td><?php echo e($s->id); ?></td>
                <td><?php echo e($s->dob); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asif\Desktop\webTech\Lab_task_Adwebtech\lab1\resources\views/students/list.blade.php ENDPATH**/ ?>