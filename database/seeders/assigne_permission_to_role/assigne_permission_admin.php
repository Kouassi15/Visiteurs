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
        // $adminRole = Role::where("name","admin")->first();

        // $adminRole->givePermissionTo([
        //     'manage collaborateur',
        //     'create collaborateur',
        //     'edit collaborateur',
        //     'delete collaborateur',
        //     'manage project',
        //     'manage task',
        //     'manage comptable',
        // ]);
    }
}
