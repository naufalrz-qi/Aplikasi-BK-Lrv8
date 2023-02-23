@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Siswa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->tempat_lahir }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->telepon }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $s->id) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- tambahkan baris ini -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
@endsection
