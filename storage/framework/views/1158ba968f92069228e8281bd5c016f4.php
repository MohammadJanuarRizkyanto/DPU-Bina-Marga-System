<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->

<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header text-center">
                        <h4 class="card-title">Daftar Kepegawaian DPU Bina Maga Provinsi Jawa Timur</h4>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Unit Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->nip_pegawai); ?></td>
                                        <td><?php echo e($data->nama_pegawai); ?></td>
                                        <td><?php echo e($data->jabatan_pegawai); ?></td>
                                        <td><?php echo e($data->unit_kerja); ?></td>
                                        
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\FIXED\DPU-Kerja Praktik\resources\views/pegawai/index.blade.php ENDPATH**/ ?>