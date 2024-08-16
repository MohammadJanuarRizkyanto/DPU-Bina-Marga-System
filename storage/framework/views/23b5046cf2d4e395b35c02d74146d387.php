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
                                        <!-- Form start -->
                                        <form action="<?php echo e(route('test.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <!--detail test -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Jenis Test</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="judul_materi" name="judul_materi" class="form-control" value="" placeholder="Masukkan Judul Materi" required>
                                                </div>
                                                <!--Question 1 -->
                                                <div class="mb-3 col-sm-12">
                                                    <label for="question1" class="form-label">Pertanyaan 1:</label>
                                                    <textarea class="form-control" id="question1" name="question1" rows="2" required></textarea>
                                                </div>
                                                <!--Question 2 -->
                                                <div class="mb-3 col-sm-12">
                                                    <label for="question2" class="form-label">Pertanyaan 2:</label>
                                                    <textarea class="form-control" id="question2" name="question2" rows="2" required></textarea>
                                                </div>
                                                <!--Question 3 -->
                                                <div class="mb-3 col-sm-12">
                                                    <label for="question3" class="form-label">Pertanyaan 3:</label>
                                                    <textarea class="form-control" id="question3" name="question3" rows="2" required></textarea>
                                                </div>
                                                <!--Question 4 -->
                                                <div class="mb-3 col-sm-12">
                                                    <label for="question4" class="form-label">Pertanyaan 4:</label>
                                                    <textarea class="form-control" id="question4" name="question4" rows="2" required></textarea>
                                                </div>
                                                <!--Question 5 -->
                                                <div class="mb-3 col-sm-12">
                                                    <label for="question5" class="form-label">Pertanyaan 5:</label>
                                                    <textarea class="form-control" id="question5" name="question5" rows="2" required></textarea>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\last can\last can\DPU-Kerja Praktik\resources\views/test/addtest.blade.php ENDPATH**/ ?>