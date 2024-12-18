<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        $credentials = [
            'user_email' => $request->email,
            'password' => $request->password
        ];

        
        $user = User::where('user_email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->user_password)) {
            Auth::login($user);
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau Password salah'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
