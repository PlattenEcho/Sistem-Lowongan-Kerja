<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perusahaan');
            $table->foreign('id_perusahaan')->references('id')->on('perusahaan');
            $table->string('nama');
            $table->string('tipe');
            $table->integer('usia_min');
            $table->integer('usia_max');
            $table->integer('gaji_min');
            $table->integer('gaji_max');
            $table->string('nama_cp');
            $table->string('email_cp');
            $table->string('no_telp_cp');
            $table->date('tgl_update')->default(now());
            $table->date('tgl_aktif');
            $table->date('tgl_tutup')->nullable();
            $table->string('status')->default('Aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loker');
    }
};
