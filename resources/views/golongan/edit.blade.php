@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Golongan</h1>
    <form action="{{ route('golongan.update', $golongan->gol_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="gol_kode">Kode Golongan</label>
            <input type="text" name="gol_kode" value="{{ $golongan->gol_kode }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gol_nama">Nama Golongan</label>
            <input type="text" name="gol_nama" value="{{ $golongan->gol_nama }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('golongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
