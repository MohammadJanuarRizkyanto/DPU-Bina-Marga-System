<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Training Management</title>
    <link rel="stylesheet" href="{{ asset('template/dist/assets/css/pages/auth.css')}}">
    @include('include.style')
</head>

        <body>
            <div id="auth">
                
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ route('dashboard') }}">Logo</a>
                    </div>
                    <h3 class="auth-title">Masuk</h3>
                    <p class="auth-subtitle mb-5">Masuk dengan akun anda</p>

                    <form method='post' action="{{ route('login.store') }}">
                        @csrf
                        @if (session()->has('loginError'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{session('loginError')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="email" name="email" class="form-control @error('email') is invalid 
                        @enderror form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <small class="btn btn-danger">{{ $message}} </small>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password"class="form-control @error('password') is invalid 
                        @enderror form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <small class="btn btn-danger">{{ $message}} </small>
                            @enderror
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum punya akun? <a href="{{ route('register') }}" class="font-bold">Daftar Akun</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>
     </div>
    </body>

</html>
