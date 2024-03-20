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
        Schema::create('polies', function (Blueprint $table) {
            $table->id('id_poli'); // Menggunakan method id() untuk membuat primary key yang bertipe big integer
            $table->string('nama');
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->unsignedBigInteger('dokter_id');
            $table->timestamps();
            
            $table->foreign('pasien_id')->references('id_pasien')->on('pasiens');
            $table->foreign('dokter_id')->references('id_dokter')->on('dokters');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polies');
    }
};
