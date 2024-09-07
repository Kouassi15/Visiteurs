<?php

namespace App\Models;

use App\Models\Fidele;
use App\Models\Programme;
use App\Models\TypeActeur;
use App\Models\AnnonceDepartement;
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

    public function programme()
    {
        return $this->belongsTo(Programme::class, 'id_programme');
    }

    public function annonceDepartement()
    {
        return $this->belongsTo(AnnonceDepartement::class, 'id_annonceDpepartement');
    }

    public function fidele()
    {
        return $this->belongsTo(Fidele::class, 'id_fidele');
    }
}
