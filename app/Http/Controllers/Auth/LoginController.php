<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm(Request $request)
    {
        // Simpan lawan ke session jika ada dari query string
        if ($request->has('lawan')) {
            session(['match_redirect' => strtolower($request->lawan)]);
        }

        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Cegah session fixation

            // Cek apakah ada rencana redirect berdasarkan match
            $redirect = session()->pull('match_redirect');

            if ($redirect) {
                switch ($redirect) {
                    case 'australia':
                        return redirect()->route('harga'); // route ke halaman harga
                    case 'japan':
                        return redirect()->route('harga2');
                    case 'spain':
                        return redirect()->route('harga3');
                    default:
                        return redirect('/'); // fallback jika lawan tidak dikenali
                }
            }

            // Fallback redirect jika tidak ada match
            return redirect('/harga');
        }

        // Gagal login, kembalikan dengan error
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }
}
