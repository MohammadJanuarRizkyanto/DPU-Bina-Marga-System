<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="row" id="basic-table">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title text-center">Daftar Test Pelatihan</h6>
                                    </div>
                                    <!-- Tabel list Test -->
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
                                                <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-light"><?php echo e($id_test->id); ?></td>
                                                    <td class="text-light"><?php echo e($id_test->Jenis); ?></td>
                                                    <td>
                                                        <!-- Link to view the specific test's questions -->
                                                        <a href="<?php echo e(route('viewtest2', ['id' => $id_test->id])); ?>">
                                                            <i class="fa fa-play text-success"></i>
                                                        </a>
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

                <!-- Custom CSS for card background color -->
                <style>
                    .custom-card-bg {
                        background-color: #f0f0f0; 
                    }
                </style>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\last can\last can\DPU-Kerja Praktik\resources\views/test/test.blade.php ENDPATH**/ ?>