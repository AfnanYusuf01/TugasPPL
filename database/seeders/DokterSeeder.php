<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [11, "dr Farhansyah Romadhan", "Umum", 23456, 4 ],
            [22, "dr Udin Astaghfirulah", "Anak", 23343, 5],
            [33, "dr Arya Syaputra", "Ortopedi", 22342, 6],
            [44, "dr Abdul Dauliy", "Gigi", 22134, 3],
        ];

        foreach ($data as $item) {
            DB::table('dokters')->insert([
                'Id_dokter' => $item[0],
                'nama' => $item[1],
                'spesialisasi' => $item[2],
                'nomer_izin_praktik' => $item[3],
                'user_id' => $item[4], 
                'created_at' => now(), 
                'updated_at' => now(),
            ]);
        }
    }
}
