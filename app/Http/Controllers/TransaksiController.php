<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Tiket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TransaksiController extends Controller
{
    public function store(Request $request)
{
    dd($request->input('jumlah'));
    Log::info('Request data:', $request->all()); // Cek isi input yang masuk

    $userId = Auth::id();
    $jumlahArray = $request->input('jumlah', []);

    Log::info('Jumlah array:', $jumlahArray);

    $requestJumlah = $request->input('jumlah');

foreach ($request->input('jumlah') as $tiketId => $jumlah) {
    $jumlah = intval($jumlah);
    if ($jumlah > 0) {
        $tiket = Tiket::find($tiketId);
        if ($tiket) {
            $totalHarga = $tiket->harga * $jumlah;
            Log::info("Tiket ID: $tiketId, Harga: {$tiket->harga}, Jumlah: $jumlah, Total Harga: $totalHarga");

            Transaksi::create([
                'user_id' => $userId,
                'tiket_id' => $tiketId,
                'jumlah' => $jumlah,
                'total_harga' => $totalHarga,
                'status' => 'pending',
            ]);
        } else {
            Log::warning("Tiket dengan id $tiketId tidak ditemukan");
        }
    }
}

    return redirect()->back()->with('success', 'Transaksi berhasil disimpan!');
}

}