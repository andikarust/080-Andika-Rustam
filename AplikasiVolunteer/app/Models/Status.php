<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id_activity',
        'id_user'
    ];

    public function activities()
    {
        return $this->belongsTo(Activity::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
