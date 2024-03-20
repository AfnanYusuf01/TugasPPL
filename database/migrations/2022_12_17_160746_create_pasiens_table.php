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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id('id_pasien'); // Menggunakan method id() untuk membuat primary key yang bertipe big integer
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('nomor_kk');
            $table->string('agama');
            $table->string('status_kawin');
            $table->string('file_ktp')->nullable();
            $table->string('file_kk')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        
            // Menggunakan foreign() untuk mendefinisikan foreign key
            $table->foreign('user_id')->references('id_user')->on('users');
        });
                
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
