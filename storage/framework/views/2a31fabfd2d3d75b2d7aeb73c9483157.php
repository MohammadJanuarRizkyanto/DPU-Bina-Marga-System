<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard - Training Manajement DPU Bina Marga Jatim</title>
    
    <?php echo $__env->make('include.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Dinas Pekerjaan Umum Bina Marga Provinsi Jawa Timur</h3>
</div>
    <?php echo $__env->yieldContent('content'); ?>
<body>
    <div id="app">
        <?php echo $__env->make('include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
        </div>
        
    </div>
    <?php echo $__env->make('include.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\PUTRI ZAHRAFI\Downloads\TrainingManagement-DPU-Bina-Marga-main\resources\views\kerangka\master.blade.php ENDPATH**/ ?>