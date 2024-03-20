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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id('id_antrian');
            $table->string('nama');
            $table->string('email');
            $table->string('poli');
            $table->string('penjamin');
            $table->string('token');
            $table->string('no_urut')->nullable();
            $table->string('status')->nullable();
            $table->string('bpjs')->nullable();
            $table->string('surat_rujukan')->nullable();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('poli_id'); // Mengubah nama kolom foreign key
            $table->timestamps();
        
            // Mengubah penamaan foreign key sesuai dengan kolom yang seharusnya
            $table->foreign('pasien_id')->references('id_pasien')->on('pasiens');
            $table->foreign('poli_id')->references('id_poli')->on('polies');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
