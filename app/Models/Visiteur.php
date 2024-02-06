<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;

    public function visiteur() 
{ 
    return $this->hasMany(Visiteur::class); 
}
public function responsable()
{ 
    return $this->belongsTo(Responsable::class, 'responsable_id', 'id'); 
}

public function type_visiteur()
{ 
    return $this->belongsTo(Type_visiteur::class,'type_visiteur_id', 'id'); 
}
}
