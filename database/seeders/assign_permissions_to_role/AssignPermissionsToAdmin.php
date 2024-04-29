<?php

namespace Database\Seeders\assign_permissions_to_role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignPermissionsToAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = Role::where("name","admin")->first();

        $adminRole->givePermissionTo([
            'manage affaire_social',
            'create affaire_social',
            'edit affaire_social',
            'delete affaire_social',
            // 'manage project',
            // 'manage task',
            // 'manage comptable',
        ]);
    }
}
