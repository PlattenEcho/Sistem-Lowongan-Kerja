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
        // $status = $this->faker->randomElement(['Aktif', 'Sedang Seleksi', 'Tutup']);
        $status = 'Aktif';
        $tgl_update = '';
        $tgl_aktif = '';
        $tgl_tutup = '';
        if ($status == 'Aktif') {
            $tgl_update = now();
            $tgl_aktif = $this->faker->dateTimeBetween($tgl_update, '+1 months')->format('Y-m-d');
            $tgl_tutup = NULL;
        } else if ($status == 'Sedang Seleksi') {
            $tgl_update = now();
            $tgl_aktif = now();
            $tgl_tutup = NULL;
        } else {
            $tgl_update = now();
            $tgl_aktif = now();
            $tgl_tutup = now();
        }

        return [
            'id_perusahaan' => $this->faker->numberBetween(1, 5),
            'nama' => $this->faker->jobTitle(),
            'tipe' => $this->faker->randomElement(['Penuh Waktu', 'Paruh Waktu', 'Lepas Waktu', 'Magang']),
            'usia_min' => $this->faker->numberBetween(20, 40),
            'usia_max' => $this->faker->numberBetween(41, 60),
            'gaji_min' => $this->faker->numberBetween(2000000, 5000000),
            'gaji_max' => $this->faker->numberBetween(7000000, 10000000),
            'nama_cp' => $this->faker->name(),
            'email_cp' => $this->faker->unique()->safeEmail(),
            'no_telp_cp' => $this->faker->numerify('############'),
            'tgl_update' => $tgl_update,
            'tgl_aktif' => $tgl_aktif,
            'tgl_tutup' => $tgl_tutup,
            'status' => $status,
        ];
    }
}
