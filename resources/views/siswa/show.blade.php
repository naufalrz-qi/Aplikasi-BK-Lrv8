@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Siswa
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/foto_siswa/' . $siswa->foto) }}" class="img-thumbnail" alt="{{ $siswa->nama }}">
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>{{ $siswa->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>NISN</td>
                                            <td>{{ $siswa->nisn }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td>{{ $siswa->tempat_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>{{ $siswa->tanggal_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>{{ $siswa->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Telepon</td>
                                            <td>{{ $siswa->telepon }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>{{ $siswa->kelas->nama }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
