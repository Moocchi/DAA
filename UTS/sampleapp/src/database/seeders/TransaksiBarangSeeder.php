<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi_barangs')->insert([
            [
                'barang_id' => 1,
                'tanggal' => '2023-10-01',
                'tipe_transaksi' => 'masuk',
                'jumlah' => 100,
                'pihak_terkait' => 'Supplier A',
                'catatan' => 'Initial stock',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
