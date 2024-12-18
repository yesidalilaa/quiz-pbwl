<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongan = Golongan::all();
        return view('golongan.index', compact('golongan'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        Golongan::create($request->all());
        return redirect()->route('golongan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $golongan = Golongan::findOrFail($id);
        return view('golongan.edit', compact('golongan'));
    }

    public function update(Request $request, $id)
    {
        $golongan = Golongan::findOrFail($id);
        $golongan->update($request->all());
        return redirect()->route('golongan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Golongan::destroy($id);
        return redirect()->route('golongan.index')->with('success', 'Data berhasil dihapus');
    }
}
