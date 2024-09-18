<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

     protected $fillable = ['texte','theme', 'description','date','dirigeant','orateur','programme_id','fidele_id','annonceDepartement_id','nettoyage','remerciement','intervention'];

    public function programme()
    {
        return $this->belongsTo(Programme::class, 'programme_id');
    }

    public function annonceDepartement()
    {
        return $this->belongsTo(AnnonceDepartement::class, 'annonceDepartement_id');
    }

    public function fidele()
    {
        return $this->belongsTo(Fidele::class, 'fidele_id');
    }
}
