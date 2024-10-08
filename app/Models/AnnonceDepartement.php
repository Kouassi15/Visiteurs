<?php

namespace App\Models;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnonceDepartement extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonceJepcma',
        'annonceAfecmaci',
        'annonceFeci',
        'annonceRecmaci',
        'annonceNational',
        'annonceecoleDimanche',
 ];

    public function annonce() 
    { 
        return $this->hasMany(Annonce::class); 
    }
}
