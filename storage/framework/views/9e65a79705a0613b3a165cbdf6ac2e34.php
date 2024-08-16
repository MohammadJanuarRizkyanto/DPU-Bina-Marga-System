<?php $__env->startSection('content'); ?>

<!-- Basic Tables start -->

<section class="section">
        <!-- Halaman test -->
        <section class="section">
            <div class="row">
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="card">
                                        <!--Tittle -->
                                            <div class="card-header">
                                                <h4 class="card-title text-center">Tambah Test Pelatihan Sertifikasi</h4>
                                            </div>
                                            <!--detail test -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>ID Test</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="id_materi" name="id_materi" class="form-control" value="" placeholder="Masukkan ID Materi">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Jenis Test</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="judul_materi"  name="judul_materi " class="form-control" value="" placeholder="Masukkan Judul Materi">
                                                    </div>
                                        <!--Question 1 -->
                                                    <div class="mb-3 col-sm-12">
                                                        <label for="question" class="form-label">Pertanyaan:</label>
                                                        <textarea class="form-control" id="question1" name="question" rows="2" required></textarea>
                                                    </div>

                                        <!--Question 2 -->
                                                    <div class="mb-3 col-sm-12">
                                                        <label for="question" class="form-label">Pertanyaan:</label>
                                                        <textarea class="form-control" id="question2" name="question" rows="2" required></textarea>
                                                    </div>

                                        <!--Question 3 -->
                                                    <div class="mb-3 col-sm-12">
                                                        <label for="question" class="form-label">Pertanyaan:</label>
                                                        <textarea class="form-control" id="question3" name="question" rows="2" required></textarea>
                                                    </div>

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <a href="" type="submit" class="btn btn-primary me-1 mb-1">Submit</a>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PUTRI ZAHRAFI\Downloads\TrainingManagement-DPU-Bina-Marga-main\resources\views\test\addtest.blade.php ENDPATH**/ ?>