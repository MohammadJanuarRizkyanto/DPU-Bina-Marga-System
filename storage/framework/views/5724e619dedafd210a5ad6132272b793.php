<?php $__env->startSection('content'); ?>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Tambah Data Pegawaian DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="<?php echo e(route('pegawai.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Nomor Induk Pegawai (NIP)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="nip_pegawai" name="nip_pegawai" class="form-control <?php $__errorArgs = ['nip_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nip_pegawai')); ?>" placeholder="Masukkan Nomor Induk Pegawai" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control <?php $__errorArgs = ['nama_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nama_pegawai')); ?>" placeholder="Masukkan Nama Lengkap" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="jabatan_pegawai" name="jabatan_pegawai" class="form-control <?php $__errorArgs = ['jabatan_pegawai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('jabatan_pegawai')); ?>" placeholder="Masukkan Jabatan" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Unit Kerja</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="unit_kerja" name="unit_kerja" class="form-control <?php $__errorArgs = ['unit_kerja'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('unit_kerja')); ?>" placeholder="Masukkan Unit Kerja" required>
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PUTRI ZAHRAFI\Downloads\TrainingManagement-DPU-Bina-Marga-main\resources\views\pegawai\create.blade.php ENDPATH**/ ?>