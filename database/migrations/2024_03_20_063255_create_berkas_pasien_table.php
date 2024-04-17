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
        Schema::create('berkas_pasien', function (Blueprint $table) {
            $table->id('id_berkas');
            $table->string('bpjs')->nullable();
            $table->string('surat_rujukan')->nullable();
            $table->string('surat_jasaraharja')->nullable();
            $table->string('surat_klaim_asuransi')->nullable();
            $table->unsignedBigInteger('pasien_id');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id_pasien')->on('pasiens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_pasien');
    }
};
