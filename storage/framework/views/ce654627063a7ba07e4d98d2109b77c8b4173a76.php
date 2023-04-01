<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>

<h1>Ini Halaman About</h1>
<h3><?php echo e($Deskripsi); ?></h3>
<h3><?php echo e($role); ?></h3>
<h3><?php echo e($Informasi); ?></h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/about.blade.php ENDPATH**/ ?>