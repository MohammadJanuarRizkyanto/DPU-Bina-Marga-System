<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('template/dist/assets/css/pages/auth.css')}}">
    @include('include.style')
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ route('dashboard') }}"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Daftar Akun</h1>
                    <p class="auth-subtitle mb-5">Daftar dengan data anda</p>
                    <form method="post" action="{{ route('register.store') }}">
                        @csrf
            <!--NIP-->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="name" name="name" class="form-control @error('name') is invalid 
                            
                            @enderror form-control-xl" placeholder="NIP">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('name')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
            {{-- Nama Pegawai --}}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control @error('nama_pegawai') is invalid 
                            
                            @enderror form-control-xl" placeholder="Nama Pegawai">
                            <div class="form-control-icon">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            @error('nama_pegawai')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
            {{-- Jabatan Pegawai --}}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="jabatan_pegawai" name="jabatan_pegawai" class="form-control @error('jabatan_pegawai') is invalid 
                            
                            @enderror form-control-xl" placeholder="Jabatan">
                            <div class="form-control-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            @error('jabatan_pegawai')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
            {{-- Jabatan Pegawai --}}
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="unit" name="unit" class="form-control @error('unit') is invalid 
                            
                            @enderror form-control-xl" placeholder="Unit Kerja">
                            <div class="form-control-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            @error('unit')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
            <!--email-->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="email" name="email" class="form-control @error('email') is invalid 
                            
                            @enderror form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
            <!--password-->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password" class="form-control @error('password') is invalid 
                            
                            @enderror form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('email')
                                <small class="btn btn-danger">{{ $message}}</small>
                            @enderror
                        </div>
                        

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah Punya Akun <a href="{{ route('login') }}" class="font-bold">Masuk</a>.</p>
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
