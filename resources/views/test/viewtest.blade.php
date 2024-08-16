@extends('kerangka.master')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Test Pelatihan Sertifikasi</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <!-- Check if $test is not null -->
                        @if ($test)
                        <form action="{{ route('test.respon.store', $test->id) }}" method="POST">
                                @csrf

                                <!-- Pertanyaan 1 -->
                                <div class="mb-3">
                                    <label for="rating1_{{ $test->id }}" class="form-label">{{ $test->pertanyaan1 }}</label>
                                    <div class="d-flex justify-content-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating1_{{ $test->id }}" id="rating1_{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="rating1_{{ $i }}">{{ $i }}</label>
                                            </div>
                                        @endfor
                                        
                                    </div>
                                </div>

                                <!-- Pertanyaan 2 -->
                                <div class="mb-3">
                                    <label for="rating2_{{ $test->id }}" class="form-label">{{ $test->pertanyaan2 }}</label>
                                    <div class="d-flex justify-content-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating2_{{ $test->id }}" id="rating2_{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="rating2_{{ $i }}">{{ $i }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <!-- Pertanyaan 3 -->
                                <div class="mb-3">
                                    <label for="rating3_{{ $test->id }}" class="form-label">{{ $test->pertanyaan3 }}</label>
                                    <div class="d-flex justify-content-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating3_{{ $test->id }}" id="rating3_{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="rating3_{{ $i }}">{{ $i }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <!-- Pertanyaan 4 -->
                                <div class="mb-3">
                                    <label for="rating4_{{ $test->id }}" class="form-label">{{ $test->pertanyaan4 }}</label>
                                    <div class="d-flex justify-content-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating4_{{ $test->id }}" id="rating4_{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="rating4_{{ $i }}">{{ $i }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <!-- Pertanyaan 5 -->
                                <div class="mb-3">
                                    <label for="rating5_{{ $test->id }}" class="form-label">{{ $test->pertanyaan5 }}</label>
                                    <div class="d-flex justify-content-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="rating5_{{ $test->id }}" id="rating5_{{ $i }}" value="{{ $i }}" required>
                                                <label class="form-check-label" for="rating5_{{ $i }}">{{ $i }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        @else
                            <p>Test not found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
