@extends('kerangka.master')

@section('content')

<!-- Basic Tables start -->

<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header text-center">
                        <h4 class="card-title">Daftar Kepegawaian DPU Bina Maga Provinsi Jawa Timur</h4>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Unit Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $data)
                                    <tr>
                                        <td>{{$data->nip_pegawai}}</td>
                                        <td>{{$data->nama_pegawai}}</td>
                                        <td>{{$data->jabatan_pegawai}}</td>
                                        <td>{{$data->unit_kerja}}</td>
                                        {{-- <td>
                                            <a href="{{ route('pegawai.edit', ['pegawai' => $data->id]) }}"
                                                class="btn btn-outline-warning btn-sm me-2" ti  tle="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="{{ route('pegawai.destroy', ['pegawai' => $data->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                title="Delete" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td> --}}
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
