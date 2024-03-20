<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'polies';
    protected $primaryKey = 'id_poli'; // Menggunakan 'id_poli' sebagai primary key

    protected $fillable = [
        'name',
        'dokter_id',
        'pasien_id',
    ];





    public function pasien()
    {
        return $this->belongsToMany(Pasien::class, 'pasien_id', 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    public function antrian()
    {
        return $this->hasMany(Antrian::class);
    }
}
