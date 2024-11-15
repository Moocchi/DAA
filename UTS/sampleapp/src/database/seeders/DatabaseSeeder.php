<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedusers();
        $this->callSeeders();
    }

    private function seedusers(): void
    {
        if(!User::where('email', 'admin@admin.com')->exists())
        {
            $users = User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]
        ]);

        foreach($users as $user){
            if($user->email =='admin@admin.com' ){
                $user->assignRole('super_admin');
                }
            }
        }
    }

    private function callSeeders(): void
    {
        $this->call([
            GudangSeeder::class,
            BarangSeeder::class,
            TransaksiBarangSeeder::class,
            PelacakanBarangSeeder::class,
            LaporanStokSeeder::class,
        ]);
    }
}
