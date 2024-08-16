<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->
<h7>DAFTAR KEPEGAWAIAN DPU BINA MARGA PROVINSI JAWA TIMUR</h7>
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
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
                                        <td>
                                            <a href="<?php echo e(route('pegawai.edit', ['pegawai' => $data->id])); ?>"
                                                class="btn btn-outline-warning btn-sm me-2" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="<?php echo e(route('pegawai.destroy', ['pegawai' => $data->id])); ?>"
                                            method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                title="Delete" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yudi\OneDrive\Dokumen\DITA\TrainingManagement-DPU-Bina-Marga-main\resources\views/pegawai/index.blade.php ENDPATH**/ ?>