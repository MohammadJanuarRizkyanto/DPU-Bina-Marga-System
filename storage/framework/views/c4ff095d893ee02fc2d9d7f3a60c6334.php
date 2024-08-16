

<?php
    $pageTitle = 'Respons';
?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Form Pencarian -->
        <form action="<?php echo e(route('respon.index')); ?>" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value="<?php echo e(request('search')); ?>">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Tabel Data -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'id', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">ID</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'test_id', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Test ID</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'rating1', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Soal 1</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'rating2', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Soal 2</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'rating3', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Soal 3</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'rating4', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Soal 4</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'rating5', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Soal 5</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'created_at', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Created At</a></th>
                    <th><a href="<?php echo e(route('respon.index', ['sort_by' => 'updated_at', 'order' => request('order') == 'asc' ? 'desc' : 'asc'])); ?>">Updated At</a></th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $respons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->test_id); ?></td>
                        <td><?php echo e($item->rating1); ?></td>
                        <td><?php echo e($item->rating2); ?></td>
                        <td><?php echo e($item->rating3); ?></td>
                        <td><?php echo e($item->rating4); ?></td>
                        <td><?php echo e($item->rating5); ?></td>
                        <td><?php echo e($item->created_at); ?></td>
                        <td><?php echo e($item->updated_at); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data Test yang ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Pagination -->
       <!-- Pagination -->
<div class="d-flex justify-content-center">
    <?php echo e($respons->appends(request()->query())->links('pagination::bootstrap-4')); ?>

</div>

        <!-- Menampilkan Jumlah per Skala -->
        <div class="mt-4">
            <h4>Jumlah per Skala</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Skala</th>
                        <th>Soal 1</th>
                        <th>Soal 2</th>
                        <th>Soal 3</th>
                        <th>Soal 4</th>
                        <th>Soal 5</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $scaleCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scale => $counts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($scale); ?></td>
                            <td><?php echo e($counts['rating1']); ?></td>
                            <td><?php echo e($counts['rating2']); ?></td>
                            <td><?php echo e($counts['rating3']); ?></td>
                            <td><?php echo e($counts['rating4']); ?></td>
                            <td><?php echo e($counts['rating5']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhlan\Documents\Joki\Rejan\DPU-Kerja Praktik\resources\views/respon/index.blade.php ENDPATH**/ ?>