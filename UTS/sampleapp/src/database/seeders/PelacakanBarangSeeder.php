<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelacakanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelacakan_barangs')->insert([
            [
                'barang_id' => 1,
                'gudang_id' => 1,
                'lokasi_rak' => 'A1',
                'catatan' => 'Barang ini sudah diambil',
                'created_at' => now(),
                'updated_at' => now(),
            ]
    ]);
    }
}
