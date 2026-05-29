<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            MahasiswaSeeder::class,
        ]);

        // Seeder Factory Anggota + Kartu Anggota
        Anggota::factory(10)
            ->hasKartuAnggota([
                'tanggal_aktivasi' => now(),
            ])
            ->create();
    }
}