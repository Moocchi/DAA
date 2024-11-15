<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanStok extends Model
{
    use HasFactory;
    protected $fillable = 
        [
        'gudang_id',
        'tanggal_laporan',
        'total_barang',
        'total_kategori',
        'barang_habis',
        'barang_tersedia',
        'catatan_laporan'
        ];
}
