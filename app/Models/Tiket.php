<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tikets';

    protected $casts = [
        'tanggal' => 'date',
    ];

    protected $fillable = [
        'nama_pertandingan',
        'tanggal',
        'stock',
        'harga',
        'kategori'
    ];
}
