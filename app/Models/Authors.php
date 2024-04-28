<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'organism',
        'special_session_id',
    ];

    public function specialSession()
    {
        return $this->belongsTo(SpecialSessions::class, 'special_session_id');
    }

}
