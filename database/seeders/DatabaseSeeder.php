<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\TypeActeurSeeder;
use Database\Seeders\assign_permissions_to_role\AssignPermissionsToAdmin;
use Database\Seeders\assign_permissions_to_role\AssignPermissionsToMember;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        // ]);

        $this->call([ RoleSeeder::class, UserSeeder::class, PermissionSeeder::class, AssignPermissionsToAdmin::class, AssignPermissionsToMember::class, TypeActeurSeeder::class,TypeVisiteurSeeder::class]);
    }
}
