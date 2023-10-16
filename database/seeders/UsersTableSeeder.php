<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Petugas;
use App\Models\Pencaker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil data dari tabel petugas dan mengisinya ke tabel users
        $petugasData = Petugas::all();
        foreach ($petugasData as $petugas) {
            User::create([
                'name' => $petugas->nama,
                'email' => $petugas->email,
                'password' => bcrypt($petugas->password),
                'role' => 'petugas',
            ]);
        }

        // Mengambil data dari tabel pencaker dan mengisinya ke tabel users
        $pencakerData = Pencaker::all();
        foreach ($pencakerData as $pencaker) {
            User::create([
                'name' => $pencaker->nama,
                'email' => $pencaker->email,
                'password' => bcrypt($pencaker->password),
                'role' => 'pencaker',
            ]);
        }
    }
}
