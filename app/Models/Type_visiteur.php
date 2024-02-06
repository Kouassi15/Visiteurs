<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_visiteur extends Model
{
    use HasFactory;

    public function type_visiteur()
{ 
    return $this->belongsTo(Type_visiteur::class,'type_visiteur_id', 'id'); 
}
}
