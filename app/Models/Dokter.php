<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Spesialisasi',
        'Nomer_izin_praktik',
        'email',
    ];

    protected $guarded = [];

    public function rekam_medis()
{
    return $this->hasMany(RekamMedis::class);
}

    public function user()
    {
        return $this->belongsTo(User::class,);
    }
}
