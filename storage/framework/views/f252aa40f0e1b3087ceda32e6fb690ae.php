

<?php
    $pageTitle = 'Edit Test';
?>

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Edit Test</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('test.update', ['id' => $test->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-3">
                            <label for="judul_materi" class="form-label">Judul Materi</label>
                            <input type="text" name="judul_materi" id="judul_materi" class="form-control" value="<?php echo e(old('judul_materi', $test->Jenis)); ?>" required>
                            <?php $__errorArgs = ['judul_materi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Repeat for other questions -->
                        <div class="mb-3">
                            <label for="question1" class="form-label">Pertanyaan 1</label>
                            <input type="text" name="question1" id="question1" class="form-control" value="<?php echo e(old('question1', $test->pertanyaan1)); ?>" required>
                            <?php $__errorArgs = ['question1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <!-- Repeat for question2-->
                        <div class="mb-3">
                            <label for="question2" class="form-label">Pertanyaan 2</label>
                            <input type="text" name="question2" id="question2" class="form-control" value="<?php echo e(old('question2', $test->pertanyaan2)); ?>" required>
                            <?php $__errorArgs = ['question2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                         <!-- Repeat for question3-->
                         <div class="mb-3">
                            <label for="questio31" class="form-label">Pertanyaan 3</label>
                            <input type="text" name="question3" id="question3" class="form-control" value="<?php echo e(old('question3', $test->pertanyaan3)); ?>" required>
                            <?php $__errorArgs = ['question3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                         <!-- Repeat for question4-->
                         <div class="mb-3">
                            <label for="question4" class="form-label">Pertanyaan 4</label>
                            <input type="text" name="question4" id="question4" class="form-control" value="<?php echo e(old('question4', $test->pertanyaan4)); ?>" required>
                            <?php $__errorArgs = ['question4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <!-- Repeat for question5-->
                        <div class="mb-3">
                            <label for="question5" class="form-label">Pertanyaan 5</label>
                            <input type="text" name="question5" id="question5" class="form-control" value="<?php echo e(old('question5', $test->pertanyaan5)); ?>" required>
                            <?php $__errorArgs = ['question5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('kerangka.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\DPU-Kerja Praktik\resources\views/test/edit.blade.php ENDPATH**/ ?>