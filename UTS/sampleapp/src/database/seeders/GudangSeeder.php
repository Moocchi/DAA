<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gudangs')->insert([
            [
                'nama_gudang' => 'Gudang Utama',
                'lokasi' => 'Jakarta',
                'kapasitas' => 100000.00,
                'kapasitas_terpakai' => 500.00,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
