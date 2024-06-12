@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div class="container">
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">run</div>
                <div class="lastname">tracker</div>
            </div>
            <ul class="nav">
                <li><a href="{{ url('widgets/information') }}" class=""> tentang kami</a></li>
                <li><a href="{{ url('login/loginn') }}" class="satu">login/register</a></li>
                <li><a href="{{ url('crud2/awal') }}" class="dua">admin</a></li>
                <li><a href="{{ url('crud/index') }}" class="tiga">user</a></li>
                <li><img src="{{ asset('gambar/sampel2.jpg') }}" alt=""></li>
            </ul>
        </nav>
    </div>
    <h1>Daftar Lomba</h1>
    <a href="{{ route('lombas.create') }}" class="btn btn-primary">Tambah Lomba</a>
    <a href="{{ route('lombas.cetak') }}" class="btn btn-primary">cetak cak</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama </th>
                <th>Tanggal lahir</th>
                <th>asal daerah</th>
                <th>umur</th>
                <th>alasan mengikuti lomba</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lombas as $lomba)
            <tr>
                <td>{{ $lomba->id }}</td>
                <td>{{ $lomba->nama }}</td>
                <td>{{ $lomba->tanggal }}</td>
                <td>{{ $lomba->lokasi }}</td>
                <td>{{ $lomba->jumlah_peserta }}</td>
                <td>{{ $lomba->keterangan }}</td>
                <td>
                    <a href="{{ route('lombas.edit', $lomba->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('lombas.destroy', $lomba->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
