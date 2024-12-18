@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit User</h1>

    <form action="{{ route('user.update', $user->user_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="user_email" name="user_email" value="{{ $user->user_email }}" required>
        </div>
        <div class="mb-3">
            <label for="user_nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="user_nama" name="user_nama" value="{{ $user->user_nama }}" required>
        </div>
        <div class="mb-3">
            <label for="user_alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="user_alamat" name="user_alamat" rows="3">{{ $user->user_alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="user_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="user_hp" name="user_hp" value="{{ $user->user_hp }}">
        </div>
        <div class="mb-3">
            <label for="user_role" class="form-label">Role</label>
            <input type="number" class="form-control" id="user_role" name="user_role" value="{{ $user->user_role }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
