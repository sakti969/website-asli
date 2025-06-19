<?php

namespace App\Http\Controllers;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketsController extends Controller
{
    public function updateAll(Request $request)
    {
        $tiketsData = $request->input('tikets', []);

        foreach ($tiketsData as $data) {
            $tiket = Tiket::find($data['id']);
            if ($tiket) {
                $tiket->nama_pertandingan = $data['nama_pertandingan'];
                $tiket->tanggal = $data['tanggal'];
                $tiket->stok = $data['stok'];
                $tiket->harga = $data['harga'];
                $tiket->save();
            }
        }

        return redirect()->back()->with('success', 'Semua tiket berhasil diperbarui.');
    }

    public function index()
{
    $kategoris = Tiket::select('kategori', 'harga')->distinct()->get();

    $keterangan = [
        'VIP' => 'View terbaik, dekat lapangan',
        'VIP Barat' => 'View terbaik, dekat lapangan',
        'Tribun Timur' => 'View sedang, nyaman',
        'Tribun Barat' => 'View standar',
        'Tribun Selatan' => 'View jauh, harga terjangkau',
    ];

    // Buat key array dengan lowercase dan trim spasi untuk pencocokan
    $keteranganFormatted = [];
    foreach ($keterangan as $key => $value) {
        $keteranganFormatted[strtolower(trim($key))] = $value;
    }

    return view('hargatiket.harga', [
        'kategoris' => $kategoris,
        'keterangan' => $keteranganFormatted
    ]);
}


}
