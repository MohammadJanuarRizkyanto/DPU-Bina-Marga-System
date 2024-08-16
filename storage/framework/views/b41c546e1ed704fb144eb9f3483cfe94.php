<?php $__env->startSection('content'); ?>

<div class="page-content">
<div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <a href="">
            <img src="<?php echo e(asset('images/dashboard.jpg')); ?>" alt="Dashboard" width="900" height="auto">
</div>
        </div>
    </section>
</div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .img-custom {
        width: 10%;  /* Lebar gambar 50% dari kontainer induk */
        height: auto; /* Tinggi gambar menyesuaikan dengan lebar */
        display: block; /* Memastikan gambar dalam blok untuk pemusatan */
        margin: 0 auto; /* Memusatkan gambar */
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\FIXED\DPU-Kerja Praktik\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>