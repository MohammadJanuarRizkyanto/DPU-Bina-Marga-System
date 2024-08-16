@extends('kerangka.master')

@section('content')
<!-- Basic Tables start -->

<!-- Display Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header text-center mb-4">
                        <h4 class="card-title">Daftar Test Pelatihan Sertifikasi Pegawai</h4>
                        <h6 class="card-subtitle">DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <!--
                                        <th>Pertanyaan 1</th>
                                        <th>Pertanyaan 2</th>
                                        <th>Pertanyaan 3</th>
                                        <th>Pertanyaan 4</th>
                                        <th>Pertanyaan 5</th>-->
                                        <th>Lihat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($test as $item) <!-- Use 'test' here -->
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Jenis }}</td>
                                        <!--
                                        <td>{{ $item->pertanyaan1 }}</td>
                                        <td>{{ $item->pertanyaan2 }}</td>
                                        <td>{{ $item->pertanyaan3 }}</td>
                                        <td>{{ $item->pertanyaan4 }}</td>
                                        <td>{{ $item->pertanyaan5 }}</td>-->
                                        <td>
                                            <a href="{{ route('viewtest2', ['id' => $item->id]) }}">
                                            <i class="fa fa-play"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('test.edit', $item->id) }}" class="btn btn-outline-warning btn-sm me-2" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="{{ route('test.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
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
</section>
@endsection
