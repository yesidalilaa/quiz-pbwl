<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    $user = User::all(); 
    return view('user.index', compact('user')); 
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users,user_email',
            'user_password' => 'required',
            'user_nama' => 'required',
        ]);

        $data = $request->all();
        $data['user_password'] = bcrypt($request->user_password); 
        User::create($data);

        return redirect()->route('user.index')->with('success', 'Data User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users,user_email,' . $id . ',user_id',
            'user_nama' => 'required',
        ]);

        $user = User::findOrFail($id);
        $data = $request->all();
        if ($request->filled('user_password')) {
            $data['user_password'] = bcrypt($request->user_password);
        }
        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Data User berhasil diperbarui');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index')->with('success', 'Data User berhasil dihapus');
    }
}
