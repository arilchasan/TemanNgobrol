<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Buatkan halaman login admin
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            if (Auth::guard('admin')->user()->role == 'admin') {
                return redirect('/dashboard')->with('success', 'Selamat datang, ' . Auth::guard('admin')->user()->username . '!');
            } else {
                Auth::guard('admin')->logout();
                return back()->with('error', 'Akses ditolak, anda bukan admin.');
            }
        }


        return back()->with('error', 'Email atau Password salah.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/login-admin')->with( 'error', 'Anda telah berhasil logout.');
    }
}
