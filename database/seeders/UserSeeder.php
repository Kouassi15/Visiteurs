<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\assign_permissions_to_role\AssignPermissionsToAdmin;
use Database\Seeders\assign_permissions_to_role\AssignPermissionsToMember;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "name" => "admin",
            "email"=>"admin@gmail.com",
            "password" => Hash::make('12345678'),
        ]);

        // assigne role
        $admin->assignRole('admin');

        $affairesocial = User::create([
            "name" => "Affaire_social",
            "email"=>"affaire_social@gmail.com",
            "password" => Hash::make('12345678'),
        ]);

        // assigne role
        $affairesocial->assigneRole('affaire_social');

        $jepcma = User::create([
            "name" => "Jepcma",
            "email"=>"jepcma@gmail.com",
            "password" => Hash::make('12345678'),
        ]);

        // assigne role
        $jepcma->assigneRole('jepcma');
    }
}
