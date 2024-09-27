<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jepcemiste extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','contact','activite','profession','photo','quartier','status','sexe'];

}
