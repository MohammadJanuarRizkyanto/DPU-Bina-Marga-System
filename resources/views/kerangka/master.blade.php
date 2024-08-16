<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{$pageTitle}}</title>
    
    @include('include.style')
</head>
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<!--<div class="page-heading">
    <h3>Dinas Pekerjaan Umum Bina Marga Provinsi Jawa Timur</h3>
</div>-->

    @yield('content')
<body>
    <div id="app">
        @include('include.sidebar')
</div>
        </div>
        
    </div>
    @include('include.script')
</body>

</html>
