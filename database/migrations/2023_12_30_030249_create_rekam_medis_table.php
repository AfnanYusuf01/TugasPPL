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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id('id_rekam_medis');
            $table->string('nama');
            $table->date('tanggal');
            $table->text('gejala');
            $table->text('diagnosis');
            $table->text('penangan');
            $table->text('resep_obat');
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('pasien_id')->references('id_pasien')->on('pasiens');            
            $table->foreign('dokter_id')->references('id_dokter')->on('dokters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
