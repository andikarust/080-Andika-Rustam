<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_aktivitas',
        'tanggal_aktivitas',
        'tanggal_batas_registrasi',
        'lokasi',
        'id_organization',
        'id_activities_type',
        'cover',
        'deskripsi'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function activities_type()
    {
        return $this->belongsTo(ActivityType::class);
    }
    public function status()
    {
        return $this->hasMany(Status::class);
    }
}
