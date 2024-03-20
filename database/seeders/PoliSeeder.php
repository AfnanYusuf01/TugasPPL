<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ["1", "Umum",null,11],
            ["2", "Anak",null,22],
            ["3", "Gigi",null,33],
            ["4", "Ortopedi",null,44]

        ];

        foreach ($data as $item) {
            DB::table('polies')->insert([
                'id_poli' => $item[0],
                'nama' => $item[1],
                'pasien_id' => $item[2],
                'dokter_id' => $item[3],
            ]);
        }
    }
}
