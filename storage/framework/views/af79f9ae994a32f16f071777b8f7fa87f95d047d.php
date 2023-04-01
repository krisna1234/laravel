<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Telp</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo e($nama); ?></td>
        <td><?php echo e($no_telp); ?></td>
        <td><?php echo e($alamat); ?></td>
    </tr>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/contact.blade.php ENDPATH**/ ?>