<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_user'; // Menggunakan 'id_user' sebagai primary key
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'name',
        'email',
        'password',
        'role',
        'email_verified_at',
        'rememberToken',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's role.
     *
     * @param  string  $value
     * @return string
     */
    public function getRoleAttribute($value)
    {
        return ucfirst($value);
    }

    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }

    public function dokter()
    {
        return $this->hasOne(Dokter::class);
    }
}
