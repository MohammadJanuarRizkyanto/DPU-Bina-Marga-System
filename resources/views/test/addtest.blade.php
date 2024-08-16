@extends('kerangka.master')

@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Tambah Test Pelatihan Pegawai DPU Bina Marga Provinsi Jawa Timur</h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('storetest') }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">

                                    <!-- Dropdown to select Pelatihan -->
                                    <div class="col-md-4">
                                        <label>ID Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select name="pelatihan_id" class="form-control" required>
                                            <option value="">Pilih Pelatihan</option>
                                            @foreach($pelatihan as $p)
                                                <option value="{{ $p->id }}">{{ $p->id_materi }} - {{ $p->judul_training }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Input for Judul Materi -->
                                    <div class="col-md-4">
                                        <label>Judul Test</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="judul_materi" name="judul_materi" class="form-control @error('judul_materi') is-invalid @enderror" placeholder="Masukkan Judul Test" required>
                                        @error('judul_materi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input for Question 1 -->
                                    <div class="col-md-4">
                                        <label>Pertanyaan 1</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="question1" name="question1" class="form-control @error('question1') is-invalid @enderror" placeholder="Masukkan Pertanyaan 1" required>
                                        @error('question1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input for Question 2 -->
                                    <div class="col-md-4">
                                        <label>Pertanyaan 2</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="question2" name="question2" class="form-control @error('question2') is-invalid @enderror" placeholder="Masukkan Pertanyaan 2" required>
                                        @error('question2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input for Question 3 -->
                                    <div class="col-md-4">
                                        <label>Pertanyaan 3</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="question3" name="question3" class="form-control @error('question3') is-invalid @enderror" placeholder="Masukkan Pertanyaan 3" required>
                                        @error('question3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input for Question 4 -->
                                    <div class="col-md-4">
                                        <label>Pertanyaan 4</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="question4" name="question4" class="form-control @error('question4') is-invalid @enderror" placeholder="Masukkan Pertanyaan 4" required>
                                        @error('question4')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Input for Question 5 -->
                                    <div class="col-md-4">
                                        <label>Pertanyaan 5</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="question5" name="question5" class="form-control @error('question5') is-invalid @enderror" placeholder="Masukkan Pertanyaan 5" required>
                                        @error('question5')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit and Reset Buttons -->
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
