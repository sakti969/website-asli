<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/harga', function() {
    return view('hargatiket.harga');
})->name('harga');

Route::get('/harga2', function() {
    return view('hargatiket.harga2');
})->name('harga2');

Route::get('/harga3', function() {
    return view('hargatiket.harga3');
})->name('harga3');

Route::get('/checkout', function () {
    return view('checkout.checkout');
})->name('checkout');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Route untuk daftar tiket
Route::get('/tiket', [TicketController::class, 'index'])->name('tickets.index');

// Route untuk detail tiket
Route::get('/tiket/{id}', [TicketController::class, 'show'])->name('tickets.show');

// Route untuk checkout tiket
Route::post('/tiket/checkout', [TicketController::class, 'checkout'])->name('tickets.checkout');

// Route untuk halaman konfirmasi pembayaran
Route::get('/tiket/confirmation', [TicketController::class, 'confirmation'])->name('tickets.confirmation');

// Route untuk riwayat tiket
Route::get('/tiket/riwayat', [TicketController::class, 'history'])->name('tickets.history');

// Route untuk admin panel
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Route untuk halaman admin mengelola tiket
Route::get('/admin/tiket', [AdminController::class, 'manageTickets'])->name('admin.manageTickets');

// Route untuk update tiket
Route::get('/admin/tiket/', [AdminController::class, 'update'])->name('admin.updateTicket');

// Route untuk delete tiket
Route::put('/admin/tiket/', [AdminController::class, 'delete'])->name('admin.deleteTicket');

// Route untuk edit tiket
Route::put('/admin/tiket/{id}', [AdminController::class, 'edit'])->name('admin.editTicket');

// Route untuk Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Route untuk Register
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup']);