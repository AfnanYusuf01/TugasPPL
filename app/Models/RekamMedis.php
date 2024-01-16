<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'nama',
        'tanggal',
        'gejala',
        'diagnosis',
        'penangan',
        'resep_obat',
    ];


    public function dokters()
{
    return $this->belongsTo(Dokter::class,);
}

public function pasiens()
{
    return $this->belongsTo(Pasien::class,);
}
}
