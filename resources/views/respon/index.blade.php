@extends('kerangka.master')

@php
    $pageTitle = 'Respons';
@endphp

@section('content')
    <div class="container">
        <!-- Form Pencarian -->
        <form action="{{ route('respon.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>

        <!-- Tabel Data -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'id', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">ID</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'test_id', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Test ID</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'rating1', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Soal 1</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'rating2', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Soal 2</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'rating3', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Soal 3</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'rating4', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Soal 4</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'rating5', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Soal 5</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'created_at', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                    <th><a href="{{ route('respon.index', ['sort_by' => 'updated_at', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Updated At</a></th>
                </tr>
            </thead>
            <tbody>
                @forelse($respons as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->test_id }}</td>
                        <td>{{ $item->rating1 }}</td>
                        <td>{{ $item->rating2 }}</td>
                        <td>{{ $item->rating3 }}</td>
                        <td>{{ $item->rating4 }}</td>
                        <td>{{ $item->rating5 }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data Test yang ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
       <!-- Pagination -->
<div class="d-flex justify-content-center">
    {{ $respons->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>

        <!-- Menampilkan Jumlah per Skala -->
        <div class="mt-4">
            <h4>Jumlah per Skala</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Skala</th>
                        <th>Soal 1</th>
                        <th>Soal 2</th>
                        <th>Soal 3</th>
                        <th>Soal 4</th>
                        <th>Soal 5</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scaleCounts as $scale => $counts)
                        <tr>
                            <td>{{ $scale }}</td>
                            <td>{{ $counts['rating1'] }}</td>
                            <td>{{ $counts['rating2'] }}</td>
                            <td>{{ $counts['rating3'] }}</td>
                            <td>{{ $counts['rating4'] }}</td>
                            <td>{{ $counts['rating5'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection