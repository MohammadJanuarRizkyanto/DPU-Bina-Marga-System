@extends('kerangka.master')

@php
    $pageTitle = 'Absensi';
@endphp

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">Absensi Peserta Pelatihan</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form id="absensiForm" action="{{ route('absensi.create') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                       <!-- ID Absensi -->
                                       <div class="col-md-4">
                                            <label>ID Absensi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="id_absensi" name="id_absensi"
                                                class="form-control @error('id_absensi') is-invalid @enderror"
                                                value="{{ old('id_absensi', $next_id_absensi) }}" readonly>
                                            @error('id_absensi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- ID Training -->
                                        <div class="col-md-4">
                                            <label>ID Pelatihan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="id_training" name="id_training"
                                                class="form-control @error('id_training') is-invalid @enderror"
                                                value="{{ old('id_training', $id_pelatihan) }}" readonly>
                                            @error('id_training')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- NIP Pegawai -->
                                        <div class="col-md-4">
                                            <label>Nomor Induk Pegawai (NIP)</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nip_pegawai" name="nip_pegawai"
                                                class="form-control @error('nip_pegawai') is-invalid @enderror"
                                                value="{{ old('nip_pegawai', $nip_pegawai) }}" readonly>
                                            @error('nip_pegawai')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                       <!-- ID Test -->
                                            <!--<div class="col-md-4">
                                                <label>ID Test</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select name="id_test[]" id="id_test" class="form-control @error('id_test') is-invalid @enderror" multiple required>
                                                    @foreach($tests as $test)
                                                        <option value="{{ $test->id }}">{{ $test->id }}</option>
                                                    @endforeach
                                                </select>
                                                @error('id_test')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>-->

                                        <!-- Tanggal -->
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal" name="tanggal"
                                                class="form-control @error('tanggal') is-invalid @enderror"
                                                value="{{ old('tanggal') }}" placeholder="" required>
                                            @error('tanggal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Status Test Selesai -->
                                        <div class="col-md-4">
                                            <label>Status Test Selesai</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="StatusTest_Done" name="StatusTest_Done"
                                                class="form-control @error('StatusTest_Done') is-invalid @enderror"
                                                value="{{ old('StatusTest_Done', $jumlah_status_benar) }}">
                                            @error('StatusTest_Done')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Jumlah Test -->
                                        <div class="col-md-4">
                                            <label>Jumlah Test</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="jumlah_test" name="jumlah_test"
                                                class="form-control @error('jumlah_test') is-invalid @enderror"
                                                value="{{ old('jumlah_test', $jumlah_test) }}" readonly>
                                            @error('jumlah_test')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button id="submitButton" type="submit" class="btn btn-primary me-1 mb-1" disabled>Submit</button>
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

    <!-- Custom JavaScript for Validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const statusTestDoneInput = document.getElementById('StatusTest_Done');
            const jumlahTestInput = document.getElementById('jumlah_test');
            const submitButton = document.getElementById('submitButton');

            function validateForm() {
                const statusTestDone = parseInt(statusTestDoneInput.value);
                const jumlahTest = parseInt(jumlahTestInput.value);

                if (statusTestDone === jumlahTest) {
                    submitButton.disabled = false;
                } else {
                    submitButton.disabled = true;
                }
            }

            // Validate on input change
            statusTestDoneInput.addEventListener('input', validateForm);
            jumlahTestInput.addEventListener('input', validateForm);

            // Initial validation on page load
            validateForm();
        });
    </script>
@endsection
