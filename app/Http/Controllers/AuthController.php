<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Method untuk menampilkan halaman pendaftaran akun
    public function showRegistrationForm()
    {
        return view('daftarakun');  // Pastikan sesuai dengan path dan nama view yang Anda gunakan
    }

    // Method untuk proses pendaftaran
    public function register(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash::make() untuk mengenkripsi password
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    // Method untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');  // Pastikan sesuai dengan path dan nama view yang Anda gunakan
    }

    // Method untuk proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home')); // Redirect ke halaman dashboard setelah login berhasil
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah.'); // Redirect kembali ke halaman login dengan pesan error
        }
    }

    // Method untuk proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login'); // Redirect ke halaman login setelah logout
    }
}
