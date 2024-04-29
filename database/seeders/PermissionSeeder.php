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
        Permission::create([
            'name'=>'manage users',
            "guard_name" => "web",
        ]);
        
        Permission::create([
            'name' => 'manage affaire_social',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'create affaire_social',
            "guard_name" => "web",
        ]);
        
        Permission::create([
            'name' => 'view affaire_social',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'edit affaire_social',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'delete affaire_social',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'manage membre',
            "guard_name" => "web",
        ]);
        
        Permission::create([
            'name' => 'view membre',
            "guard_name" => "web",
        ]);
        
        Permission::create([
            'name' => 'create membre',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'edit membre',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'delete membre',
            "guard_name" => "web",
        ]);

        Permission::create([
            'name' => 'manage jepcma',
            "guard_name" => "web",
        ]);
    }
}
