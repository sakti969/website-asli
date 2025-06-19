<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Jika nama tabel tidak plural (default Laravel pluralisasi otomatis), harus ditulis:
    protected $table = 'transaksi';

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'user_id',
        'tiket_id',
        'jumlah',
        'total_harga',
        'status',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
