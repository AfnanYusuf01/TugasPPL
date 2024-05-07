<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_dokter'; // Menggunakan 'id_dokter' sebagai primary key
    protected $table = 'dokters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'spesialisasi',
        'image',
        'nomer_izin_praktik',
        'user_id',
    ];

    /**
     * Get the user that owns the dokter.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rekam_medis()
    {
        return $this->hasMany(RekamMedis::class);
    }

    public function poli()
    {
        return $this->hasMany(Poli::class, 'dokter_id');
    }
}
