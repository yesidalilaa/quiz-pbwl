@extends('layouts.app')

@section('title', 'Data User')

@section('content')
<div class="container">
    <h1 class="mb-4">Data User</h1>

    <!-- Tombol Tambah User -->
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>

    <!-- Pesan Flash -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Data User -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Role</th>
                <th>Status Aktif</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user as $key => $u)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $u->user_email }}</td>
                    <td>{{ $u->user_nama }}</td>
                    <td>{{ $u->user_alamat }}</td>
                    <td>{{ $u->user_hp }}</td>
                    <td>
                        @if($u->user_role == 1)
                            Admin
                        @elseif($u->user_role == 2)
                            User
                        @else
                            Unknown
                        @endif
                    </td>
                    <td>
                        @if($u->user_aktif == 1)
                            Aktif
                        @else
                            Tidak Aktif
                        @endif
                    </td>
                    <td>
                        <!-- Tombol Edit -->
                        @if(!empty($u->user_id))
                            <a href="{{ route('user.edit', $u->user_id) }}" class="btn btn-warning btn-sm">Edit</a>
                        @else
                            <span class="text-danger">ID Tidak Valid</span>
                        @endif

                        <!-- Form Hapus -->
                        @if(!empty($u->user_id))
                            <form action="{{ route('user.destroy', $u->user_id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Data tidak ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection