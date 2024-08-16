@extends('kerangka.master')

@section('content')

<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-mid-12">
            <div class="card">
                 <div class="card-header text-center">
                        <h4 class="card-title">Daftar Absensi Pelatihan Sertifikasi Kepegawaian</h4>
                        <h6 class="card-subtitle">DPU Bina Maga Provinsi Jawa Timur</h6>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                    <form method="GET" action="{{ route('pegawai.absen') }}">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="start_date">Tanggal Mulai:</label>
                                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="end_date">Tanggal Akhir:</label>
                                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="search">Cari Nama/NIP:</label>
                                <input type="text" id="search" name="search" class="form-control" placeholder="Nama atau NIP" value="{{ request('search') }}">
                            </div>
                            <div class="col-md-3 align-self-end">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>

                        <div class="table-responsive">
                            <table class="table table-striped" id="absensiTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP Pegawai</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jabatan Pegawai</th>
                                        <th>Unit Kerja</th>
                                        <th>Nama Training</th>
                                        <th>Judul Materi</th>
                                        <th>Total Jam</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($absensi as $index => $item)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{ $item->nip_pegawai}}</td>
                                            <td>{{ $item->pegawai->nama_pegawai ?? 'N/A' }}</td>
                                            <td>{{ $item->pegawai->jabatan_pegawai }}</td>
                                            <td>{{ $item->pegawai->unit_kerja }}</td>
                                            <td>{{ $item->training->judul_training ?? 'N/A' }}</td>
                                            <td>
                                                @if($item->training->materi->isNotEmpty())
                                                    <ul>
                                                        @foreach($item->training->materi as $materi)
                                                            <li>{{ $materi->judul_materi }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            @php
                                                $totalSeconds = $item->training->materi->reduce(function ($carry, $materi) {
                                                    $timeParts = explode(':', $materi->jam);
                                                    $seconds = ($timeParts[0] * 3600) + ($timeParts[1] * 60) + ($timeParts[2] ?? 0);
                                                    return $carry + $seconds;
                                                }, 0);

                                                $hours = floor($totalSeconds / 3600);
                                                $minutes = floor(($totalSeconds % 3600) / 60);
                                                $seconds = $totalSeconds % 60;
                                            @endphp
                                            <td>{{ $hours }}jam {{ $minutes }}menit {{ $seconds }}detik</td>
                                            <td>{{ $item->tanggal }}</td>
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
</section>

@endsection
