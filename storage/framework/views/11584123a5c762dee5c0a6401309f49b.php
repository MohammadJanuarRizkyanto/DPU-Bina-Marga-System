<?php $__env->startSection('content'); ?>
<!-- Basic Tables start -->

<!-- Display Success Message -->
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header text-center mb-4">
                        <h4 class="card-title">Daftar Test Pelatihan Sertifikasi Pegawai</h4>
                        <h6 class="card-subtitle">DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <!--
                                        <th>Pertanyaan 1</th>
                                        <th>Pertanyaan 2</th>
                                        <th>Pertanyaan 3</th>
                                        <th>Pertanyaan 4</th>
                                        <th>Pertanyaan 5</th>-->
                                        <th>Lihat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Use 'test' here -->
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->Jenis); ?></td>
                                        <!--
                                        <td><?php echo e($item->pertanyaan1); ?></td>
                                        <td><?php echo e($item->pertanyaan2); ?></td>
                                        <td><?php echo e($item->pertanyaan3); ?></td>
                                        <td><?php echo e($item->pertanyaan4); ?></td>
                                        <td><?php echo e($item->pertanyaan5); ?></td>-->
                                        <td>
                                            <a href="<?php echo e(route('viewtest2', ['id' => $item->id])); ?>">
                                            <i class="fa fa-play"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('test.edit', $item->id)); ?>" class="btn btn-outline-warning btn-sm me-2" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="<?php echo e(route('test.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?')">
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

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\FIXED\DPU-Kerja Praktik\resources\views/test/test.blade.php ENDPATH**/ ?>