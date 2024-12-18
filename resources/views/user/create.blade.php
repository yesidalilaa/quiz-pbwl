@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="user_email" name="user_email" required>
        </div>
        <div class="mb-3">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="user_password" name="user_password" required>
        </div>
        <div class="mb-3">
            <label for="user_nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="user_nama" name="user_nama" required>
        </div>
        <div class="mb-3">
            <label for="user_alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="user_alamat" name="user_alamat" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="user_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="user_hp" name="user_hp" required>
        </div>
        <div class="mb-3">
            <label for="user_pos" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="user_pos" name="user_pos" maxlength="5" required>
        </div>
        <div class="mb-3">
            <label for="user_role" class="form-label">Role</label>
            <input type="number" class="form-control" id="user_role" name="user_role" min="1" max="2" required>
        </div>
        <div class="mb-3">
            <label for="user_aktif" class="form-label">Status Aktif</label>
            <select class="form-control" id="user_aktif" name="user_aktif" required>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
