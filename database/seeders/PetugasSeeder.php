<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Database\Factories\PetugasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::factory()->count(3)->create();
    }
}
