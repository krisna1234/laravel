<?php $__env->startSection('title', 'home'); ?>

<?php $__env->startSection('content'); ?>
<h1>Ini halaman home</h1>
<h2>Selamat Datang, <?php echo e($name); ?></h2>
<h2><?php echo e($role); ?></h2>

            

            
                

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
        <?php $__currentLoopData = $buah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop ->iteration); ?></td>
        <td><?php echo e($data); ?></td>
    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/home.blade.php ENDPATH**/ ?>