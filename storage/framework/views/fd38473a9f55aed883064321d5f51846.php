<?php
    $pageTitle = 'Absensi';
?>

<?php $__env->startSection('content'); ?>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Absensi Peserta Pelatihan</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form id="absensiForm" action="<?php echo e(route('absensi.create')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-body">
                                    <div class="row">
                                        <!-- ID Absensi -->
                                        <div class="col-md-4">
                                            <label>ID Absensi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="id_absensi" name="id_absensi"
                                                class="form-control <?php $__errorArgs = ['id_absensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('id_absensi')); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['id_absensi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- ID Training -->
                                        <div class="col-md-4">
                                            <label>ID Pelatihan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="id_training" name="id_training"
                                                class="form-control <?php $__errorArgs = ['id_training'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('id_training', $id_pelatihan)); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['id_training'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- NIP Pegawai -->
                                        <div class="col-md-4">
                                            <label>Nomor Induk Pegawai (NIP)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="nip_pegawai" name="nip_pegawai"
                                                class="form-control <?php $__errorArgs = ['nip_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('nip_pegawai', $nip_pegawai)); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['nip_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- ID Test -->
                                        <div class="col-md-4">
                                            <label>ID Test</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="id_test" name="id_test"
                                                class="form-control <?php $__errorArgs = ['id_test'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('id_test')); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['id_test'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal" name="tanggal"
                                                class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('tanggal')); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Status Test Selesai -->
                                        <div class="col-md-4">
                                            <label>Status Test Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="StatusTest_Done" name="StatusTest_Done"
                                                class="form-control <?php $__errorArgs = ['StatusTest_Done'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('StatusTest_Done', $jumlah_status_benar)); ?>">
                                            <?php $__errorArgs = ['StatusTest_Done'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Jumlah Test -->
                                        <div class="col-md-4">
                                            <label>Jumlah Test</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="jumlah_test" name="jumlah_test"
                                                class="form-control <?php $__errorArgs = ['jumlah_test'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('jumlah_test', $jumlah_test)); ?>" placeholder="" required>
                                            <?php $__errorArgs = ['jumlah_test'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button id="submitButton" type="submit" class="btn btn-primary me-1 mb-1" disabled>Submit</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom JavaScript for Validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const statusTestDoneInput = document.getElementById('StatusTest_Done');
            const jumlahTestInput = document.getElementById('jumlah_test');
            const submitButton = document.getElementById('submitButton');

            function validateForm() {
                const statusTestDone = parseInt(statusTestDoneInput.value);
                const jumlahTest = parseInt(jumlahTestInput.value);

                if (statusTestDone === jumlahTest) {
                    submitButton.disabled = false;
                } else {
                    submitButton.disabled = true;
                }
            }

            // Validate on input change
            statusTestDoneInput.addEventListener('input', validateForm);
            jumlahTestInput.addEventListener('input', validateForm);

            // Initial validation on page load
            validateForm();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhlan\Documents\Joki\Rejan\DPU-Kerja Praktik\resources\views/absensi/absensi.blade.php ENDPATH**/ ?>