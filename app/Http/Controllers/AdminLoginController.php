<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginAdmin.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari admin berdasarkan username dan password (plain text)
        $admin = Admin::where('username', $request->username)
                      ->where('password', $request->password)
                      ->first();

        if ($admin) {
            session(['admin_id' => $admin->id]);
            return redirect('/admin');
        }

        return back()->withErrors(['login' => 'Username atau password salah.']);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_id');
        return redirect('/loginAdmin');
    }
}
