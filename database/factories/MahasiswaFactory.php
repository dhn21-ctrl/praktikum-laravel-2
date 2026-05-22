<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama'    => fake()->name(),
            'nim'     => fake()->unique()->numerify('#########'),
            'jurusan' => fake()->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Sipil']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}