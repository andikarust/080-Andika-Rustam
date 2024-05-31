<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    use HasFactory;
    protected $table = "activities_types";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_jenis_aktivitas'
    ];

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
