

<?php $__env->startSection('content'); ?>

<h7>Daftar Absensi</h7>
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-mid-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form method="GET" action="<?php echo e(route('pegawai.absen')); ?>">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="start_date">Tanggal Mulai:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" value="<?php echo e(request('start_date')); ?>">
                                </div>
                                <div class="col-md-3">
                                    <label for="end_date">Tanggal Akhir:</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" value="<?php echo e(request('end_date')); ?>">
                                </div>
                                <div class="col-md-3 align-self-end">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped" id="absensiTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP Pegawai</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jabatan Pegawai</th>
                                        <th>Unit Kerja</th>
                                        <th>Nama Training</th>
                                        <th>Judul Materi</th>
                                        <th>Total Jam</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td><?php echo e($item->nip_pegawai); ?></td>
                                            <td><?php echo e($item->pegawai->nama_pegawai ?? 'N/A'); ?></td>
                                            <td><?php echo e($item->pegawai->jabatan_pegawai); ?></td>
                                            <td><?php echo e($item->pegawai->unit_kerja); ?></td>
                                            <td><?php echo e($item->training->judul_training ?? 'N/A'); ?></td>
                                            <td>
                                                <?php if($item->training->materi->isNotEmpty()): ?>
                                                    <ul>
                                                        <?php $__currentLoopData = $item->training->materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($materi->judul_materi); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <?php
                                                $totalSeconds = $item->training->materi->reduce(function ($carry, $materi) {
                                                    $timeParts = explode(':', $materi->jam);
                                                    $seconds = ($timeParts[0] * 3600) + ($timeParts[1] * 60) + ($timeParts[2] ?? 0);
                                                    return $carry + $seconds;
                                                }, 0);

                                                $hours = floor($totalSeconds / 3600);
                                                $minutes = floor(($totalSeconds % 3600) / 60);
                                                $seconds = $totalSeconds % 60;
                                            ?>
                                            <td><?php echo e($hours); ?>jam <?php echo e($minutes); ?>menit <?php echo e($seconds); ?>detik</td>
                                            <td><?php echo e($item->tanggal); ?></td>
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

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhlan\Documents\Joki\Rejan\DPU-Kerja Praktik\resources\views/pegawai/absensi.blade.php ENDPATH**/ ?>