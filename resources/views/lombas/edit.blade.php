@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lomba</h1>
    <form action="{{ route('lombas.update', ['lomba' => $lomba->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Lomba</label>
            <input type="text" name="nama" class="form-control" value="{{ $lomba->nama }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $lomba->tanggal }}" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $lomba->lokasi }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_peserta">Jumlah Peserta</label>
            <input type="number" name="jumlah_peserta" class="form-control" value="{{ $lomba->jumlah_peserta }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $lomba->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
