@extends('kerangka.master')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Edit Pelatihan Pegawai DPU Bina Marga Provinsi Jawa Timur</h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('pelatihan.update', ['id' => $pelatihan->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Materi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="id_materi" name="id_materi" class="form-control @error('id_materi') is-invalid @enderror" value="{{ $pelatihan->id_materi }}" placeholder="Masukkan ID materi" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Judul Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="judul_training" name="judul_training" class="form-control @error('judul_training') is-invalid @enderror" value="{{ $pelatihan->judul_training }}" placeholder="Masukkan Judul Training" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal_training" name="tanggal_training" class="form-control @error('tanggal_training') is-invalid @enderror" value="{{ $pelatihan->tanggal_training }}" placeholder="Masukkan Tanggal Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Jenis Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="jenis_training" name="jenis_training" class="form-control @error('jenis_training') is-invalid @enderror" value="{{ $pelatihan->jenis_training }}" placeholder="Masukkan Jenis Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tempat Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="tempat_training" name="tempat_training" class="form-control @error('tempat_training') is-invalid @enderror" value="{{ $pelatihan->tempat_training }}" placeholder="Masukkan Tempat Lokasi Pelatihan" required>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pelaksanaan_training">Pelaksanaan Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="pelaksanaan_training" name="pelaksanaan_training" class="form-control" required>
                                            <option value="Luring" {{ $pelatihan->pelaksanaan_training == 'Luring' ? 'selected' : '' }}>Luring (Offline)</option>
                                            <option value="Daring" {{ $pelatihan->pelaksanaan_training == 'Daring' ? 'selected' : '' }}>Daring (Online)</option>
                                            <option value="Hybrid" {{ $pelatihan->pelaksanaan_training == 'Hybrid' ? 'selected' : '' }}>Hybrid (Offline & Online)</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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
