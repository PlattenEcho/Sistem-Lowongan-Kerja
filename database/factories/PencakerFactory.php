<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pencaker>
 */
class PencakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'noktp' => $this->faker->unique()->nik(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => 'password',
            'tanggal_daftar' => $this->faker->dateTimeBetween('-1 months', 'now'),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'alamat' => $this->faker->address(),
            'kota' => $this->faker->city(),
            'no_telp' => $this->faker->phoneNumber()
        ];
    }
}
