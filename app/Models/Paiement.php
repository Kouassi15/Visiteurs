<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    public function cotisation()
    {
        return $this->belongsTo(Cotisation::class, 'cotisation_id');
    }
}
