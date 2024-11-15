<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'gudang_id',
        'nama_gudang',
        'lokasi',
        'kapasitas',
        'kapasitas_terpakai',
        'status'
    ];
}
