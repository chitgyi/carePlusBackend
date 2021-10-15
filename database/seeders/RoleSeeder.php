<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();
        $superadmin_role = Role::create(
            ['name' => 'superadmin', 'guard_name' => 'admin', 'created_at' => now()],
        );
        $superadmin_role->givePermissionTo($permissions);

        $admin_role = Role::create(
            ['name' => 'admin', 'guard_name' => 'admin', 'created_at' => now()],
        );
    }
}
