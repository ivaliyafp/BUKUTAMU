<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Perbaikan pada support menjadi Support
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.Login');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password'=> 'required',
        ]);
        
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password'=> 'required',
        ]);
        
        // Membuat pengguna baru dan mengatur otentikasi
        $user = User::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Masuk menggunakan otentikasi
        Auth::login($user);

        // Redirect ke halaman tertentu atau kembalikan respons sesuai kebutuhan
        return redirect('Dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
