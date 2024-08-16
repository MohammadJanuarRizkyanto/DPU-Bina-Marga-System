@extends('kerangka.master')

@section('content')
<!-- Basic Tables start -->
<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
            <div class="card-header text-center mb-4">
                        <h4 class="card-title">Daftar Materi Pelatihan Sertifikasi Pegawai</h4>
                        <h6 class="card-subtitle">DPU Bina Marga Provinsi Jawa Timur</h6>
                    </div>
                <div class="card-content">
                    <div class="card-body">
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>Id Materi</th> --}}
                                        <th>No</th> <!-- Kolom nomor urut -->
                                        <th>Judul</th>
                                        <th>Pemateri</th>
                                        <th>Durasi</th>
                                        <th>File</th>
                                        <th>Aksi</th> <!-- Tambahkan kolom aksi -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materi as $item)
                                    <tr>
                                        {{-- <td>{{ $item->id_materi }}</td> --}}
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
                                        <!-- <td>
                                            @if ($item->file)
                                                <a href="{{ asset('storage/' . $item->file) }}" download>Download File</a>
                                            @else
                                                No File
                                            @endif
                                        </td> -->
                                        <td>
                                            <a href="{{ route('materi.edit', ['materi' => $item->id]) }}"
                                                class="btn btn-outline-warning btn-sm me-2" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form action="{{ route('materi.destroy', ['materi' => $item->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                title="Delete" onclick="return confirm('Are you sure?')">
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
