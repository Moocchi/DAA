<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
        [
            'name' => 'Mahasiswa',
            'guard_name' => 'web',
        ],
        [
            'name' => 'Dosen',
            'guard_name' => 'web',
        ]
        ]); 
    }
}
