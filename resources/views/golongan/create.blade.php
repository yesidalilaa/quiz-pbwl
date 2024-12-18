@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Golongan</h1>
    <form action="{{ route('golongan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="gol_kode">Kode Golongan</label>
            <input type="text" name="gol_kode" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gol_nama">Nama Golongan</label>
            <input type="text" name="gol_nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('golongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
