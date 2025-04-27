<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    public function run(): void
    {

        Hewan::factory()->count(20)->create();
    }
}
