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
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('poli');
            $table->string('penjamin');
            $table->timestamps();
            $table->string('token');
            $table->string('no_urut')->nullable();
            $table->string('status')->nullable();
            $table->string('bpjs')->nullable();
            $table->string('surat_rujukan')->nullable();
            $table->foreignId('id_pasien')->constrained('pasiens');
            
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
