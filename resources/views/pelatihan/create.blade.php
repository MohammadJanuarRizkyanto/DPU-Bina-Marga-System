@extends('kerangka.master')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Tambah Pelatihan Pegawai DPU Bina Marga Provinsi Jawa Timur</h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('pelatihan.store') }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Materi</label>
                                    </div>
                                    {{-- <div class="col-md-8 form-group"> --}}
                                        {{-- <select id="id_materi" name="id_materi" class="form-control @error('id_materi') is-invalid @enderror" required> --}}
                                            {{-- <select id="pelatihan_id" name="pelatihan_id" class="form-control @error('pelatihan_id') is-invalid @enderror" required>
                                            <option value="">Pilih Materi</option>
                                            @foreach($materi as $item)
                                                <option value="{{ $item->id }}" data-judul="{{ $item->judul_materi }}">{{ $item->id }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_materi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror --}}
                                    {{-- </div> --}}
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="id_materi" name="id_materi" class="form-control @error('id_materi') is-invalid @enderror" value="{{ old('id_materi') }}" placeholder="Masukkan ID materi" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Judul Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="judul_training" name="judul_training" class="form-control @error('judul_training') is-invalid @enderror" placeholder="Masukkan Judul Training" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal_training" name="tanggal_training" class="form-control @error('tanggal_training') is-invalid @enderror" value="{{ old('tanggal_training') }}" placeholder="Masukkan Tanggal Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Jenis Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="jenis_training" name="jenis_training" class="form-control @error('jenis_training') is-invalid @enderror" value="{{ old('jenis_training') }}" placeholder="Masukkan Jenis Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tempat Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="tempat_training" name="tempat_training" class="form-control @error('tempat_training') is-invalid @enderror" value="{{ old('tempat_training') }}" placeholder="Masukkan Tempat Lokasi Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pelaksanaan_training">Pelaksanaan Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="pelaksanaan_training" name="pelaksanaan_training" class="form-control" required>
                                            <option value="">Pilih Jenis Pelaksanaan Training</option>
                                            <option value="Luring">Luring (Offline)</option>
                                            <option value="Daring">Daring (Online)</option>
                                            <option value="Hybrid">Hybrid (Offline & Online)</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const idMateriSelect = document.getElementById('id_materi');
                                const judulPelatihanInput = document.getElementById('judul_training');

                                idMateriSelect.addEventListener('change', function () {
                                    const selectedOption = idMateriSelect.options[idMateriSelect.selectedIndex];
                                    const judul = selectedOption.getAttribute('data-judul');
                                    judulPelatihanInput.value = judul;
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
