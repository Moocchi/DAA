<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                
                'nama_barang' => 'Barang A',
                'kategori' => 'Kategori 1',
                'jumlah' => 100000.00,
                'gudang_id' => 1,
                'kode_barang' => 'KODE001',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
