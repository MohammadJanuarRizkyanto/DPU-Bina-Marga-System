<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Test Pelatihan Sertifikasi</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <!-- Check if $test is not null -->
                        <?php if($test): ?>
                        <form action="<?php echo e(route('test.respon.store', $test->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <!-- Pertanyaan 1 -->
                                <div class="mb-3">
                                    <label for="rating1_<?php echo e($test->id); ?>" class="form-label"><?php echo e($test->pertanyaan1); ?></label>
                                    <div class="d-flex justify-content-center">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating1_<?php echo e($test->id); ?>" id="rating1_<?php echo e($i); ?>" value="<?php echo e($i); ?>" required>
                                                <label class="form-check-label" for="rating1_<?php echo e($i); ?>"><?php echo e($i); ?></label>
                                            </div>
                                        <?php endfor; ?>
                                        
                                    </div>
                                </div>

                                <!-- Pertanyaan 2 -->
                                <div class="mb-3">
                                    <label for="rating2_<?php echo e($test->id); ?>" class="form-label"><?php echo e($test->pertanyaan2); ?></label>
                                    <div class="d-flex justify-content-center">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating2_<?php echo e($test->id); ?>" id="rating2_<?php echo e($i); ?>" value="<?php echo e($i); ?>" required>
                                                <label class="form-check-label" for="rating2_<?php echo e($i); ?>"><?php echo e($i); ?></label>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <!-- Pertanyaan 3 -->
                                <div class="mb-3">
                                    <label for="rating3_<?php echo e($test->id); ?>" class="form-label"><?php echo e($test->pertanyaan3); ?></label>
                                    <div class="d-flex justify-content-center">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating3_<?php echo e($test->id); ?>" id="rating3_<?php echo e($i); ?>" value="<?php echo e($i); ?>" required>
                                                <label class="form-check-label" for="rating3_<?php echo e($i); ?>"><?php echo e($i); ?></label>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <!-- Pertanyaan 4 -->
                                <div class="mb-3">
                                    <label for="rating4_<?php echo e($test->id); ?>" class="form-label"><?php echo e($test->pertanyaan4); ?></label>
                                    <div class="d-flex justify-content-center">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating4_<?php echo e($test->id); ?>" id="rating4_<?php echo e($i); ?>" value="<?php echo e($i); ?>" required>
                                                <label class="form-check-label" for="rating4_<?php echo e($i); ?>"><?php echo e($i); ?></label>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <!-- Pertanyaan 5 -->
                                <div class="mb-3">
                                    <label for="rating5_<?php echo e($test->id); ?>" class="form-label"><?php echo e($test->pertanyaan5); ?></label>
                                    <div class="d-flex justify-content-center">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating5_<?php echo e($test->id); ?>" id="rating5_<?php echo e($i); ?>" value="<?php echo e($i); ?>" required>
                                                <label class="form-check-label" for="rating5_<?php echo e($i); ?>"><?php echo e($i); ?></label>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        <?php else: ?>
                            <p>Test not found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhlan\Documents\Joki\Rejan\DPU-Kerja Praktik\resources\views/test/viewtest.blade.php ENDPATH**/ ?>