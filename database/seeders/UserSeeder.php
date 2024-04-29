<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            "name" => "affaire_social",
            "email"=>"affairesocial@gmail.com",
            "password" => Hash::make('12345678'),
        ]);

        // assigne role
        $affairesocial->assignRole('affaire_social');

        $jepcma = User::create([
            "name" => "jepcma",
            "email"=>"jepcma@gmail.com",
            "password" => Hash::make('12345678'),
        ]);

        // assigne role
        $jepcma->assignRole('jepcma');
    }
}
