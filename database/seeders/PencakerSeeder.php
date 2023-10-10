<?php

namespace Database\Seeders;

use App\Models\Pencaker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PencakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pencaker::factory()->count(10)->create();
    }
}
