<?php

use App\Http\Controllers\TiketsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


// Halaman utama
Route::get('/', function () {
    return view('welcome');
});


// Halaman login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Halaman logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// Halaman daftar tiket
Route::get('/harga', function() {
    return view('hargatiket.harga');
})->name('harga');

Route::get('/harga2', function() {
    return view('hargatiket.harga2');
})->name('harga2');

Route::get('/harga3', function() {
    return view('hargatiket.harga3');
})->name('harga3');

// Halaman checkout
Route::get('/checkout', function () {
    return view('checkout.checkout');
})->name('checkout');

// Halaman memilih metode pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran.index');
})->name('pembayaran');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::post('/pembayaran/proses', [PembayaranController::class, 'proses'])->name('pembayaran.proses');

// Route untuk daftar tiket
Route::get('/harga', [TiketsController::class, 'index'])->name('tikets.index');


// Route untuk Login Controller
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route untuk Signup Controller
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup']);

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.index');

Route::get('/admin/transaksi', [App\Http\Controllers\AdminController::class, 'transaksi'])->name('admin.transaksi');

// Route untuk halaman login admin
Route::get('/loginAdmin', [AdminLoginController::class, 'showLoginForm']);
Route::post('/loginAdmin', [AdminLoginController::class, 'login']);


Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/logoutAdmin', [AdminLoginController::class, 'logout'])->name('logoutAdmin');

Route::post('/tikets/update-all', [TiketsController::class, 'updateAll'])->name('tikets.updateAll');

Route::post('/checkout', [TransaksiController::class, 'store'])->name('transaksi.store')->middleware('auth');


Route::get('/tiket', function () {
    return view('tickets.index'); // titik mewakili folder
});
Route::get('/harga', function () {
    return view('hargatiket.harga');
})->name('harga');

Route::get('/harga', [TiketsController::class, 'index'])->name('harga');