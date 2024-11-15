<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanStokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_stoks')->insert([
        [
            'gudang_id' => 1,
            'tanggal_laporan' => '2023-10-01',
            'total_barang' => 100.00,
            'total_kategori' => 10.00,
            'barang_habis' => 5.00,
            'barang_tersedia' => 95.00,
            'catatan_laporan' => 'Laporan stok bulan Oktober',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
