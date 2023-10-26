<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pencaker', function (Blueprint $table) {
            // $table->id();
            $table->string('no_ktp', 16)->primary();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->date('tanggal_daftar');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('kota');
            $table->string('no_telp');
            $table->string('foto_profil')->nullable();
            $table->string('foto_ktp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencaker');
    }
};
