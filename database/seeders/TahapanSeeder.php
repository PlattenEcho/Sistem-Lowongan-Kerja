<?php

namespace Database\Seeders;

use App\Models\Tahapan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tahapan::factory()->create(['nama' => 'Seleksi Administrasi']);
        Tahapan::factory()->create(['nama' => 'Seleksi Wawancara']);
    }
}
