<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Ambil semua data user
        $users = User::all();
        $userCount = $users->count();
        $tikets = Tiket::all();

        // Kirim data users ke view dashboard
        return view('admin.index', compact('users', 'userCount','tikets'));
    }
}
