@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Lomba</h1>
    <form action="{{ route('lombas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Lomba</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_peserta">Jumlah Peserta</label>
            <input type="number" name="jumlah_peserta" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
