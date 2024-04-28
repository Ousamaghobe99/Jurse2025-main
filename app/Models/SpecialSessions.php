<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialSessions extends Model
{
    protected $fillable = [
        'title',
        'description',
        'order',
    ];

    public function authors()
    {
        return $this->hasMany(Authors::class, 'special_session_id');
    }
}
