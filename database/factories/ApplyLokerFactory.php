<?php

namespace Database\Factories;

use App\Models\Loker;
use App\Models\Pencaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApplyLoker>
 */
class ApplyLokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loker = Loker::inRandomOrder()->first();
        $tgl_apply = '';
        if ($loker->status == 'Aktif') {
            $tgl_apply = now();
        } else {
            $tgl_apply = $this->faker->dateTimeBetween($loker->tgl_update, $loker->tgl_aktif);
        }
        // } else {
        //     $tgl_apply = now();
        // }

        return [
            'id_loker' => $loker->id,
            'no_ktp' => Pencaker::inRandomOrder()->value('no_ktp'),
            'tgl_apply' => $tgl_apply
        ];

        // return [];
    }
}
