<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;


    public function dokters()
{
    return $this->belongsTo(Dokter::class,);
}

public function pasiens()
{
    return $this->belongsTo(Pasien::class,);
}
}
