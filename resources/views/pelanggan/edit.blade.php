@extends('layouts.app')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $pelanggan->pel_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pel_no" class="form-label">No Pelanggan</label>
            <input type="text" class="form-control" id="pel_no" name="pel_no" value="{{ $pelanggan->pel_no }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="pel_nama" name="pel_nama" value="{{ $pelanggan->pel_nama }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="pel_alamat" name="pel_alamat" rows="3" required>{{ $pelanggan->pel_alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label for="pel_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="pel_hp" name="pel_hp" value="{{ $pelanggan->pel_hp }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_ktp" class="form-label">KTP</label>
            <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" value="{{ $pelanggan->pel_ktp }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_seri" class="form-label">Seri</label>
            <input type="text" class="form-control" id="pel_seri" name="pel_seri" value="{{ $pelanggan->pel_seri }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_meteran" class="form-label">Meteran</label>
            <input type="number" class="form-control" id="pel_meteran" name="pel_meteran" value="{{ $pelanggan->pel_meteran }}" required>
        </div>

        <div class="mb-3">
            <label for="pel_aktif" class="form-label">Status</label>
            <select class="form-control" id="pel_aktif" name="pel_aktif" required>
                <option value="Y" {{ $pelanggan->pel_aktif == 'Y' ? 'selected' : '' }}>Aktif</option>
                <option value="N" {{ $pelanggan->pel_aktif == 'N' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_gol" class="form-label">Golongan</label>
            <select class="form-control" id="pel_id_gol" name="pel_id_gol" required>
                @foreach ($golongan as $gol)
                    <option value="{{ $gol->gol_id }}" {{ $pelanggan->pel_id_gol == $gol->gol_id ? 'selected' : '' }}>{{ $gol->golongan_nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_user" class="form-label">User</label>
            <select class="form-control" id="pel_id_user" name="pel_id_user" required>
                @foreach ($users as $user)
                    <option value="{{ $user->user_id }}" {{ $pelanggan->pel_id_user == $user->user_id ? 'selected' : '' }}>{{ $user->user_nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
