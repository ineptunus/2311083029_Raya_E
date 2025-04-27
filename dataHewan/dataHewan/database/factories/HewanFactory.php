<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HewanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_hewan' => $this->faker->firstName,
            'jenis_hewan' => $this->faker->randomElement(['Anjing', 'Kucing', 'Kelinci', 'Burung', 'Ikan']),
            'ras' => $this->faker->word,
            'tanggal_lahir' =>  $this->faker->dateTimeBetween('2020-08-01', '2023-08-01'),
            'nama_pemilik' => $this->faker->name,
            'kontak_pemilik' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['aktif', 'tidak aktif']),
        ];
    }
}
