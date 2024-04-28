<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
    use HasFactory;

    protected $table = 'tweets';
    protected $fillable = ['link', 'name', 'date_tweet'];
}
