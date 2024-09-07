<?php

namespace App\Models;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programme extends Model
{
    use HasFactory;

    protected $fillable = [
    'enseignementFemme',
    'heureEnseignementFemme',
    'heurefinEnseignementFemme',
    'enseignementBiblique',
    'heureEnseignementBiblique',
    'heurefinEnseignementBiblique',
    'premierCulte',
    'deuxiemeCulte',
    'culteJumele',
    'heureCulte1',
    'heurefinCulte1',
    'heureCulte2',
    'heurefinCulte2',
    'heureCulteJumele',
    'heurefinCulteJumele',
];

    public function annonce() 
    { 
        return $this->hasMany(Annonce::class); 
    }
}
