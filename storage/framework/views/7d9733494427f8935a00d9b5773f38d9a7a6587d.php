<?php $__env->startSection('title', 'Class Room'); ?>

<?php $__env->startSection('content'); ?>
<h1>Ini Halaman Class Room</h1>

<tr>Daftar Kelas</tr>
<table class="table">
    <tr>
        <th>No</th>
        <th>Ruang Kelas</th>
    </tr>
    <?php $__currentLoopData = $ClassRoom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>//untuk nomor pada tabel
        <td><?php echo e($data->name); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/classroom.blade.php ENDPATH**/ ?>