<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelacakanBarang extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'barang_id',
        'gudang_id',
        'lokasi_rak',
        'catatan'
    ];
}
