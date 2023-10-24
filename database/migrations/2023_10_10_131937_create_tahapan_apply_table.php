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
        Schema::create('tahapan_apply', function (Blueprint $table) {
            $table->unsignedBigInteger('id_apply');
            $table->unsignedBigInteger('id_tahapan');
            $table->integer('nilai');
            $table->date('tgl_update');

            $table->foreign('id_apply')->references('id')->on('apply_loker');
            $table->foreign('id_tahapan')->references('id')->on('tahapan');
            $table->primary(['id_apply', 'id_tahapan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahapan_apply');
    }
};
