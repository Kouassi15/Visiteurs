<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage users',
            'manage affaire_social',
            'create affaire_social',
            'view affaire_social',
            'edit affaire_social',
            'delete affaire_social',
            'manage membre',
            'view membre',
            'create membre',
            'edit membre',
            'delete membre',
            'create cotisation',
            'edit cotisation',
            'delete cotisation',
            'manage jepcma',
            'view jepcma',
            'create jepcma',
            'edit jepcma',
            'delete jepcma',
            'manage affermissement',
            'view affermissement',
            'create affermissement',
            'edit affermissement',
            'delete affermissement',

        ];

        // Créer les permissions
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }
    }
}