@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Golongan</h1>

    <a href="{{ route('golongan.create') }}" class="btn btn-primary mb-3">Tambah Golongan</a>

   
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Golongan</th>
                <th>Nama Golongan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($golongan as $key => $g)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $g->gol_kode }}</td>
                    <td>{{ $g->gol_nama }}</td>
                    <td>
                        
                        <a href="{{ route('golongan.edit', $g->gol_id) }}" class="btn btn-warning btn-sm">Edit</a>

                        
                        <form action="{{ route('golongan.destroy', $g->gol_id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data tidak ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
