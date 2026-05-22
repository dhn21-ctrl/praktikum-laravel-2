<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Rifki Ramdhani',
                'nim' => '240414020',
                'jurusan' => 'IF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Delia aprilia',
                'nim' => '210916',
                'jurusan' => 'IF',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        \App\Models\Mahasiswa::factory(50)->create();
    }
}