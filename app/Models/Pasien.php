<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'nik',
        'user_id'
    ];
    protected $primaryKey = 'id';
    // Tambahkan relasi dengan tabel User dan Antrian
// Di dalam model Pasien
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }

    public function rekam_medis()
    {
        return $this->hasMany(RekamMedis::class);
    }
}