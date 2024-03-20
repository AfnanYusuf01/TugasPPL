<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ["Ahmad", "Ahmad@mail.com", null, "Password1234!", "staff", null],
            ["Arhan", "Arhan@mail.com", null, "Password1234!", "Pasien", null],
            ["Abdul", "Abdul@mail.com", null, "Password1234!", "Dokter", null],
            ["Farhan", "Farhan@mail.com", null, "Password1234!", "Dokter", null],
            ["Udin", "Udin@mail.com", null, "Password1234!", "Dokter", null],
            ["Arya", "Arya@mail.com", null, "Password1234!", "Dokter", null],
        ];

        foreach ($data as $item) {
            DB::table('users')->insert([
                'name' => $item[0],
                'email' => $item[1],
                'email_verified_at' => null, // Kolom ini diisi null ketika tidak ada tanggal verifikasi
                'password' => bcrypt($item[3]), // Disarankan menggunakan fungsi bcrypt() untuk mengenkripsi password
                'role' => $item[4],
                'remember_token' => Str::random(10), // Kolom rememberToken diisi dengan string acak
                'created_at' => now(), // Kolom created_at dan updated_at bisa diisi dengan waktu sekarang
                'updated_at' => now(),
            ]);
        }
    }
}

