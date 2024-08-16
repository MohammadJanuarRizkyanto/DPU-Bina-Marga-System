@extends('kerangka.master')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Tambah Data Pegawaian DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('pegawai.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Nomor Induk Pegawai (NIP)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nip_pegawai" name="nip_pegawai" class="form-control @error('nip_pegawai') is-invalid @enderror" value="{{ old('nip_pegawai') }}" placeholder="Masukkan Nomor Induk Pegawai" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control @error('nama_pegawai') is-invalid @enderror" value="{{ old('nama_pegawai') }}" placeholder="Masukkan Nama Lengkap" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="jabatan_pegawai" name="jabatan_pegawai" class="form-control @error('jabatan_pegawai') is-invalid @enderror" value="{{ old('jabatan_pegawai') }}" placeholder="Masukkan Jabatan" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Unit Kerja</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="unit_kerja" name="unit_kerja" class="form-control @error('unit_kerja') is-invalid @enderror" value="{{ old('unit_kerja') }}" placeholder="Masukkan Unit Kerja" required>
                                        </div>


                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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