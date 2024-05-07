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
        'name',
        'email',
        'password',
        'role', // Hapus 'id_user' dari $fillable karena ini diatur sebagai primary key dan bukan dapat diisi massal
        'email_verified_at',
        'remember_token',
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

    /**
     * Check if the user has a specific role.
     *
     * @param  string  $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Jika menggunakan tabel terpisah untuk manajemen peran, Anda perlu menyesuaikan relasinya di sini.
    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class);
    // }

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'user_id');
    }

    public function dokter()
    {
        return $this->hasOne(Dokter::class, 'user_id');
    }
}
