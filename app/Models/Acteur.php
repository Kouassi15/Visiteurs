<?php

namespace App\Models;

use App\Models\TypeActeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acteur extends Model
{
    use HasFactory;

//     public function type_acteur()
// { 
//     return $this->belongsTo(TypeActeur::class,'type_acteur_id', 'id'); 
// }

public function typeActeur()
    {
        return $this->belongsTo(TypeActeur::class, 'typeActeur_id');
    }
}
