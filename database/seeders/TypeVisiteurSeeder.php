<?php

namespace Database\Seeders;

use App\Models\Type_visiteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeVisiteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typevisiteurs =[
            "Nouveau converti",
            "Converti",
        ];

        foreach ($typevisiteurs as $key => $typevisiteur){
            $data = new Type_visiteur();
            $data -> libelle = $typevisiteur;
            $data -> save();
            }
    }
}
