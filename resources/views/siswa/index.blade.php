@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Siswa</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Kelas</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $key => $data)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nisn }}</td>
                                        <td>{{ $data->nama_kelas }}</td>
                                        <td>{{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td><img src="{{ $data->foto ? asset('storage/'.$data->foto) : asset('images/default.png') }}" width="100"></td>
                                        <td>
                                            <a href="{{ route('siswa.show', $data->id) }}" class="btn btn-primary btn-sm">Detail</a>

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
@endsection

