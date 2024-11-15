<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'barangs_id',
        'nama_barang',
        'kategori',
        'jumlah',
        'gudang_id',
        'kode_barang',
        'status'
    ];
}
