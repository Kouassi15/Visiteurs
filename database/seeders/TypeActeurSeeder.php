<?php

namespace Database\Seeders;

use App\Models\TypeActeur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeacteurs =[
            "Prédicateur",
            "Dirigeant",
            "Annonceur",
            "Lecteur",
            "Chorale Elohim",
            "Chorale Souralè",
            "Groupe Life",
            "Groupe Kanvougnamien",
            "Flambeau et Lumière",
        ];

        foreach ($typeacteurs as $key => $typeacteur){
            $data = new TypeActeur();
            $data -> libelle = $typeacteur;
            $data -> save();
            }
   
    }
}
