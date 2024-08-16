@extends('kerangka.master')

@section('content')

<div class="page-content">
<div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <a href="">
            <img src="{{ asset('images/dashboard.jpg') }}" alt="Dashboard" width="900" height="auto">
</div>
        </div>
    </section>
</div>
        </div>

@endsection

@section('styles')
<style>
    .img-custom {
        width: 10%;  /* Lebar gambar 50% dari kontainer induk */
        height: auto; /* Tinggi gambar menyesuaikan dengan lebar */
        display: block; /* Memastikan gambar dalam blok untuk pemusatan */
        margin: 0 auto; /* Memusatkan gambar */
    }
</style>
@endsection