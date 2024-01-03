<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'poli',
        'penjamin',
        'token',
        'status',
        'id_pasien',
        'no_urut',
        'bpjs',
        'surat_rujukan'
    ];


    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
