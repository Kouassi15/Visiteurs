<?php

namespace App\Models;

use App\Models\Acteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeActeur extends Model
{
    use HasFactory;

    protected $table = 'type_acteurs';

    protected $fillable = ['libelle'];
    
    public function acteur() 
    { 
        return $this->hasMany(Acteur::class); 
    }
}
