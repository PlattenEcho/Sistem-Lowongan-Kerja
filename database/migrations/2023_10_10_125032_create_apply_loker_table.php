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
        Schema::create('apply_loker', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_loker');
            $table->foreign('id_loker')->references('id')->on('loker')->onDelete('cascade');
            $table->string('no_ktp', 16);
            $table->foreign('no_ktp')->references('no_ktp')->on('pencaker');
            $table->date('tgl_apply');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_loker');
    }
};
