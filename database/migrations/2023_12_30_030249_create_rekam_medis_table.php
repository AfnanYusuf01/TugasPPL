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
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->text('gejala');
            $table->text('diagnosis');
            $table->text('penangan');
            $table->text('resep_obat');
            $table->timestamps();

            // Foreign key constraints
            $table->foreignId('id_pasien')->constrained('pasiens');
            $table->foreignId('id_dokter')->constrained('dokters');
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
