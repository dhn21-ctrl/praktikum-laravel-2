<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KartuAnggotaFactory extends Factory
{
    public function definition(): array
    {
        return [

            'nomor_kartu' => 'K-' . fake()->unique()->numberBetween(1000, 9999),

            'tanggal_aktivasi' => fake()->date(),

        ];
    }
}