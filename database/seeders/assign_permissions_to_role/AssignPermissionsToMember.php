<?php

namespace Database\Seeders\assign_permissions_to_role;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AssignPermissionsToMember extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberRole = Role::where('name','affaire_social')->first();

        $memberRole->givePermissionTo([
            'view affaire_social',
            'view membre',
            
        ]);
    }
}
