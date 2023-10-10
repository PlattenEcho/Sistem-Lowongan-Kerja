<?php

namespace Database\Factories;

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
        $pencaker = Pencaker::factory()->create();

        return [
            'id_loker' => $this->faker->numberBetween(1, 15),
            'no_ktp' => $pencaker->no_ktp,
            'tgl_apply' => now()
        ];
    }
}
