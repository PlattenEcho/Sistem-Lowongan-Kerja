<?php

namespace Database\Seeders;

use App\Models\TahapanApply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahapanApplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_apply' => 1,
                'id_tahapan' => 1,
                'nilai' => 0,
                'tgl_update' => now()
            ],
            [
                'id_apply' => 2,
                'id_tahapan' => 1,
                'nilai' => 1,
                'tgl_update' => now()
            ],
            [
                'id_apply' => 3,
                'id_tahapan' => 2,
                'nilai' => 0,
                'tgl_update' => now()
            ],
        ];

        foreach ($data as $entry) {
            TahapanApply::create($entry);
        }
    }
}
