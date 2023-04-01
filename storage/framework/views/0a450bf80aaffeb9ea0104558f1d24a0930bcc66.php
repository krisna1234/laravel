<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('content'); ?>
<h1>Ini Halaman Student</h1>
<h3>Student List</h3>
<table class="table"
    <tr>
        <th>Nama</th>
        <th>Gender</th>
        <th>Nis</th>
        <th>Class Id</th>
   </tr>
    <?php $__currentLoopData = $StudentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($data -> name); ?></td>
        <td><?php echo e($data -> gender); ?></td>
        <td><?php echo e($data -> nis); ?></td>
        <td><?php echo e($data -> class_id); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/student.blade.php ENDPATH**/ ?>