

<?php $__env->startSection('content'); ?>
<!-- Basic Tables start -->
<h7>DAFTAR MATERI PELATIHAN PEGAWAI DPU BINA MARGA PROVINSI JAWA TIMUR</h7>
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
                                        
                                        <th>No</th> <!-- Kolom nomor urut -->
                                        <th>Judul</th>
                                        <th>Pemateri</th>
                                        <th>Durasi</th>
                                        <th>File</th>
                                        <th>Aksi</th> <!-- Tambahkan kolom aksi -->
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
                                        <!-- <td>
                                            <?php if($item->file): ?>
                                                <a href="<?php echo e(asset('storage/' . $item->file)); ?>" download>Download File</a>
                                            <?php else: ?>
                                                No File
                                            <?php endif; ?>
                                        </td> -->
                                        <td>
                                            <a href="<?php echo e(route('materi.edit', ['materi' => $item->id])); ?>"
                                                class="btn btn-outline-warning btn-sm me-2" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="<?php echo e(route('materi.destroy', ['materi' => $item->id])); ?>"
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

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yudi\OneDrive\Dokumen\DITA\last can\TrainingManagement-DPU-Bina-Marga-main\resources\views/materi/index.blade.php ENDPATH**/ ?>