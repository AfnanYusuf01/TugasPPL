<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_antrian'; // Menggunakan 'id_antrian' sebagai primary key
    protected $table = 'antrians';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
        'poli',
        'penjamin',
        'token',
        'no_urut',
        'status',
        'bpjs',
        'surat_rujukan',
        'pasien_id',
    ];

    /**
     * Get the pasien that owns the antrian.
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}
