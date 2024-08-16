<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->
<section class="section">
    <form action="<?php echo e(route('absensi')); ?>">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">DETAIL PELATIHAN</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Detail Pelatihan -->
                            <?php if($pelatihan): ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->id_materi); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Judul Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->judul_training); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tanggal Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->tanggal_training); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Jenis Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->jenis_training); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tempat Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->tempat_training); ?></div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pelaksanaan_training">Pelaksanaan Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control"><?php echo e($pelatihan->pelaksanaan_training); ?></div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <p>Data pelatihan tidak tersedia.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Tabel list materi -->
    <!-- Table with outer spacing -->
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mt-5">
                            <h3 class="card-title text-center">Daftar Materi</h3>
                            
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th> <!-- Kolom nomor urut -->
                                            <th>Judul</th>
                                            <th>Pemateri</th>
                                            <th>Durasi</th>
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td><?php echo e($loop->iteration); ?></td> <!-- Menampilkan nomor urut -->
                                            <td><?php echo e($item->judul_materi); ?></td>
                                            <td><?php echo e($item->nama_pemateri); ?></td>
                                            <td><?php echo e($item->jam); ?></td>
                                            <td>
                                                <?php if($item->file): ?>
                                                    <a href="<?php echo e(asset('storage/' . $item->file)); ?>" download>Download File</a>
                                                <?php else: ?>
                                                    No File
                                                <?php endif; ?>
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
    </div>

    <!-- Tabel list Test -->
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mt-5">
                            <h3 class="card-title text-center">Daftar Test Pelatihan</h3>
                            <div class="text-end mb-3">
                                <a href="<?php echo e(route('addtest')); ?>" class="btn btn-primary">Tambah Test</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>Nama Test</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <th>1</th>
                                            <th>Pre-Test</th>
                                            <td>
                                                <a href="<?php echo e(route('viewtest2')); ?>">
                                                    <i class="fa fa-check text-success"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>2</th>
                                            <th>On-Test</th>
                                            <td>
                                                <a href="<?php echo e(route('viewtest2')); ?>">
                                                    <i class="fa fa-check text-success"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>3</th>
                                            <th>Post-Test</th>
                                            <td>
                                                <a href="<?php echo e(route('viewtest2')); ?>">
                                                    <i class="fa fa-times text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-5">
                                    <button type="submit" class="btn btn-primary w-100">Absensi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <!-- Custom CSS for card background color -->
                        <style>
                        .custom-card-bg {
                            background-color: #f0f0f0; 
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yudi\OneDrive\Dokumen\DITA\TrainingManagement-DPU-Bina-Marga-main\resources\views/pelatihan/show.blade.php ENDPATH**/ ?>