<?php

namespace Database\Factories;

use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loker>
 */
class LokerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tgl_update = now();
        $tgl_aktif = $this->faker->dateTimeBetween($tgl_update, '+3 months')->format('Y-m-d');
        $tgl_tutup = $this->faker->dateTimeBetween($tgl_aktif, '+3 months')->format('Y-m-d');

        return [
            'id_perusahaan' => $this->faker->numberBetween(1, 5),
            'nama' => $this->faker->jobTitle(),
            'tipe' => $this->faker->randomElement(['Full-time', 'Part-time', 'Freelance']),
            'usia_min' => $this->faker->numberBetween(20, 40),
            'usia_max' => $this->faker->numberBetween(41, 60),
            'gaji_min' => $this->faker->numberBetween(2000000, 5000000),
            'gaji_max' => $this->faker->numberBetween(7000000, 10000000),
            'nama_cp' => $this->faker->name(),
            'email_cp' => $this->faker->unique()->safeEmail(),
            'no_telp_cp' => $this->faker->phoneNumber(),
            'tgl_update' => $tgl_update,
            'tgl_aktif' => $tgl_aktif,
            'tgl_tutup' => $tgl_tutup,
            'status' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
        ];
    }
}
