<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Définition des rôles à créer
        $roles = [
            'admin',
            'affaire_social',
            'jepcma',
            'affermissement',
        ];

        // Parcourir chaque rôle et créer celui-ci dans la base de données
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'web', // Assurez-vous que 'web' est le guard approprié pour votre application
            ]);
        }
    }
}
