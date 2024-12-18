@extends('layouts.app')

@section('title', 'Data Pelanggan')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Pelanggan</h1>

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>No Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Golongan</th>
            <th>User</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelanggan as $key => $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pel_no }}</td>
                <td>{{ $p->pel_nama }}</td>
                <td>{{ $p->pel_alamat }}</td>
                <td>{{ $p->pel_hp }}</td>
                <td>{{ optional($p->golongan)->golongan_nama }}</td>
                <td>{{ optional($p->user)->user_nama }}</td>
                <td>{{ $p->pel_aktif == 'Y' ? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $p->pel_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pelanggan.destroy', $p->pel_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
