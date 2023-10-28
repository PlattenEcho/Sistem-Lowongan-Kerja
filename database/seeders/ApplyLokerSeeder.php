<?php

namespace Database\Seeders;

use App\Models\ApplyLoker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplyLokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplyLoker::factory()->count(30)->create();
    }
}
