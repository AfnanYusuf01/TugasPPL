<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rekam_medis'; // Menggunakan 'id_rekam_medis' sebagai primary key
    protected $table = 'rekam_medis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'tanggal',
        'gejala',
        'diagnosis',
        'penangan',
        'resep_obat',
        'dokter_id',
        'pasien_id',
    ];

    /**
     * Get the dokter that owns the rekam medis.
     */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    /**
     * Get the pasien that owns the rekam medis.
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
