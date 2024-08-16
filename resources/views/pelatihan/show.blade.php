@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->
<section class="section">
        @csrf
        <input type="hidden" name="id_pelatihan" value="{{ $pelatihan->id_materi }}">
        <input type="hidden" name="jumlah_tests" id="jumlah_tests" value="">
        <input type="hidden" name="jumlah_status_benar" id="jumlah_status_benar" value="">
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title text-center">DETAIL PELATIHAN</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Detail Pelatihan -->
                            @if($pelatihan)
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>ID Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->id_materi }}</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Judul Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->judul_training }}</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tanggal Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->tanggal_training }}</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Jenis Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->jenis_training }}</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Tempat Pelatihan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->tempat_training }}</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="pelaksanaan_training">Pelaksanaan Training</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <div class="form-control">{{ $pelatihan->pelaksanaan_training }}</div>
                                    </div>
                                </div>
                            @else
                                <p>Data pelatihan tidak tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel list materi -->
        <div class="row" id="basic-table">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="mt-5">
                                <h3 class="card-title text-center">Daftar Materi</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th> <!-- Kolom nomor urut -->
                                                <th>Judul</th>
                                                <th>Pemateri</th>
                                                <th>Durasi</th>
                                                <th>File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($materi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut -->
                                                <td>{{ $item->judul_materi }}</td>
                                                <td>{{ $item->nama_pemateri }}</td>
                                                <td>{{ $item->jam }}</td>
                                                <td>
                                                    @if ($item->file)
                                                        <a href="{{ asset('storage/' . $item->file) }}" download>Download File</a>
                                                    @else
                                                        No File
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel list Test -->
        <div class="row" id="basic-table-test">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="mt-5">
                                <h3 class="card-title text-center">Daftar Test Pelatihan</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Test</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tests as $test)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $test->Jenis }}</td>
                                                    <td>
                                                        <a href="{{ route('viewtest2', ['id' => $test->id]) }}">
                                                            @if ($test->status)
                                                                <i class="fa fa-check text-success"></i>
                                                            @else
                                                                <i class="fa fa-times text-danger"></i>
                                                            @endif
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-5">
                                        <a href="{{ route('absensi', ['id_pelatihan' => $pelatihan->id, 'jumlah_tests' => '', 'jumlah_status_benar' => '']) }}" 
                                            class="btn btn-primary w-100" 
                                            id="absensi-link">Absensi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom CSS for card background color -->
        <style>
            .custom-card-bg {
                background-color: #f0f0f0; 
            }
        </style>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const absensiLink = document.getElementById('absensi-link');
        const jumlahTests = document.querySelectorAll('#basic-table-test tbody tr').length;
        const jumlahStatusBenar = document.querySelectorAll('#basic-table-test tbody tr td:nth-child(3) i.text-success').length;

        const newUrl = absensiLink.href.replace('jumlah_tests=', 'jumlah_tests=' + jumlahTests)
                                       .replace('jumlah_status_benar=', 'jumlah_status_benar=' + jumlahStatusBenar);
        absensiLink.href = newUrl;
    });
</script>


@endsection
