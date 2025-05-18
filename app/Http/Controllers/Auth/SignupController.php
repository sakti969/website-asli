<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;            // jangan lupa import User model
use Illuminate\Support\Facades\Hash;  // untuk hashing password

class SignupController extends Controller
{
    // Menampilkan form signup
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // Menangani proses signup (registrasi)
    public function signup(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'no_telp' => ['required', 'string', 'unique:users,no_telp'],
            'password' => 'required|string|min:6|', // harus ada password_confirmation di form
        ]);

        // Buat user baru dengan data yang sudah tervalidasi
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'no_telp' => $validatedData['no_telp'],
            'password' => Hash::make($validatedData['password']), // hash password
        ]);

        // Login user otomatis setelah berhasil daftar
        Auth::login($user);

        // Regenerate session untuk keamanan
        $request->session()->regenerate();

        // Redirect ke halaman yang diinginkan, misal home
        return redirect()->intended('/');
    }
}
