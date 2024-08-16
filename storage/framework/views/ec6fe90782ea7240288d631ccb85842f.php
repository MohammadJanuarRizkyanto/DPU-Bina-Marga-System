<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->
<h7>DAFTAR PELATIHAN PEGAWAI DPU BINA MARGA PROVINSI JAWA TIMUR</h7>
<section class="section">
<div class="row">
    <?php $__currentLoopData = $pelatihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-9 col-lg-3 col-md-6">
        <div class="card">
            <a href="<?php echo e(route('pelatihan.show', ['id' => $item->id])); ?>">

                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon purple mb-2" style="margin-left:4rem;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP7CS9fIiMKQXGOwLbJ_PdNcYNU1T5Uu2InQ&s" alt="Gambar" width="50" height="50">
                        </div>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pelatihan <?php echo e($item->id_materi); ?></h5>
                                </div>
                            </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PUTRI ZAHRAFI\Downloads\TrainingManagement-DPU-Bina-Marga-main\resources\views/pelatihan/index.blade.php ENDPATH**/ ?>