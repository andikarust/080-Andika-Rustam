<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'no_telepon',
        'tgl_lahir',
        'jenis_kelamin',
        'role'

    ];

    public function status()
    {
        return $this->hasMany(Status::class);
    }
    public function organization()
    {
        return $this->hasOne(Organization::class, 'id_user');
    }

    // untuk menentukan role
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    
    public function isRelawan()
    {
        return $this->role === 'relawan';
    }
    
    public function isOrganisasi()
    {
        return $this->role === 'organisasi';
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
