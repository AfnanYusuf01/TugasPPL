<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pasien'; // Menggunakan 'id_pasien' sebagai primary key
    protected $table = 'pasiens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'email',
        'pekerjaan',
        'nomor_kk',
        'agama',
        'status_kawin',
        'file_ktp',
        'file_kk',
        'user_id',
    ];

    /**
     * Get the user that owns the pasien.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rekam_medis()
    {
        return $this->hasOne(RekamMedis::class);
    }

    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }

    public function poli()
    {
        return $this->hasMany(Poli::class);
    }
}
