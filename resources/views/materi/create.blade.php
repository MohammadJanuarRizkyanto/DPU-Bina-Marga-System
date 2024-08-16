@extends('kerangka.master')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Tambah Materi Pelatihan Pegawai DPU Bina Marga Provinsi Jawa Timur</h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('materi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                        <label>ID Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="pelatihan_id" class="form-control" required>
                                            <option value="">Pilih Pelatihan</option>
                                            @foreach($pelatihan as $p)
                                                <option value="{{ $p->id }}">{{ $p->id_materi }}-{{ $p->judul_training }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Judul Materi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="judul_materi" name="judul_materi" class="form-control @error('judul_materi') is-invalid @enderror" placeholder="Masukkan Judul Materi" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Pemateri</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama_pemateri" name="nama_pemateri" class="form-control @error('nama_pemateri') is-invalid @enderror" placeholder="Masukkan Nama Pemateri">
                                        @error('nama_pemateri')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label>Durasi Jam</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="time" id="jam" name="jam" class="form-control @error('jam') is-invalid @enderror" placeholder="Masukkan Durasi Jam">
                                        @error('jam')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label>File</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="file" name="file" class="form-control @error('file') is-invalid @enderror">
                                        @error('file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
@endsection
