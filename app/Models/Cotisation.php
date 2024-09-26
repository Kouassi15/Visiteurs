<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class , 'cotisation_id');
    }

    public function calculerMontantTotal()
    {
        return $this->paiements()->sum('montant_verse');
    }

}
