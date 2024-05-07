<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{    
    use HasFactory;
    
    protected $primaryKey = 'id_berkas'; // Menggunakan 'id_antrian' sebagai primary key
    protected $table = 'berkas_pasien';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_berkas',
        'bpjs',
        'surat_rujukan',
        'surat_jasaraharja',
        'surat_klaim_asuransi',
        'pasien_id'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
