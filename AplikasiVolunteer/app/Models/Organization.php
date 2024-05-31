<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'deskripsi_organisasi',
        'tahun_berdiri',
        'lokasi',
        'id_user',
        'domisili'
    ];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
