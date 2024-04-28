<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsors';

    protected $fillable = [
        'slc',
        'order',
    ];

    // Vous pouvez ajouter d'autres propriétés ou méthodes au besoin

    // Exemple de méthode pour définir une relation avec un autre modèle
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
