@extends('kerangka.master')

@php
    $pageTitle = 'Edit Test';
@endphp

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Edit Test</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('test.update', ['id' => $test->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul_materi" class="form-label">Judul Materi</label>
                            <input type="text" name="judul_materi" id="judul_materi" class="form-control" value="{{ old('judul_materi', $test->Jenis) }}" required>
                            @error('judul_materi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Repeat for other questions -->
                        <div class="mb-3">
                            <label for="question1" class="form-label">Pertanyaan 1</label>
                            <input type="text" name="question1" id="question1" class="form-control" value="{{ old('question1', $test->pertanyaan1) }}" required>
                            @error('question1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Repeat for question2-->
                        <div class="mb-3">
                            <label for="question2" class="form-label">Pertanyaan 2</label>
                            <input type="text" name="question2" id="question2" class="form-control" value="{{ old('question2', $test->pertanyaan2) }}" required>
                            @error('question2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <!-- Repeat for question3-->
                         <div class="mb-3">
                            <label for="questio31" class="form-label">Pertanyaan 3</label>
                            <input type="text" name="question3" id="question3" class="form-control" value="{{ old('question3', $test->pertanyaan3) }}" required>
                            @error('question3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <!-- Repeat for question4-->
                         <div class="mb-3">
                            <label for="question4" class="form-label">Pertanyaan 4</label>
                            <input type="text" name="question4" id="question4" class="form-control" value="{{ old('question4', $test->pertanyaan4) }}" required>
                            @error('question4')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Repeat for question5-->
                        <div class="mb-3">
                            <label for="question5" class="form-label">Pertanyaan 5</label>
                            <input type="text" name="question5" id="question5" class="form-control" value="{{ old('question5', $test->pertanyaan5) }}" required>
                            @error('question5')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
