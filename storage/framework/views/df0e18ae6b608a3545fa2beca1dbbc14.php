<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->
<section class="section">
    <div class="card-header text-center mb-4">
        <h4 class="card-title">Daftar Pelatihan Sertifikasi Pegawai</h4>
        <h6 class="card-subtitle">DPU Bina Marga Provinsi Jawa Timur</h6>
    </div>
    <div class="row">
        <?php $__currentLoopData = $pelatihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-lg-3 col-md-6 mb-4">
            <div class="card">
                <a href="<?php echo e(route('pelatihan.show', ['id' => $item->id])); ?>">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2" style="margin-left:4rem;">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP7CS9fIiMKQXGOwLbJ_PdNcYNU1T5Uu2InQ&s" alt="Gambar" width="50" height="50">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title">Pelatihan <?php echo e($item->id_materi); ?></h5>
                                <?php if(Auth::user()->role == 'admin'): ?>
                                <div class="d-flex justify-content-start mt-3">
                                    <a href="<?php echo e(route('pelatihan.edit', ['id' => $item->id])); ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="<?php echo e(route('pelatihan.destroy', ['id' => $item->id])); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelatihan ini?')">Delete</button>
                                    </form>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\FIXED\DPU-Kerja Praktik\resources\views/pelatihan/index.blade.php ENDPATH**/ ?>