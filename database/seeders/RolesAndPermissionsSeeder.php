<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // ✅ Reset cached roles & permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ✅ Create Permissions
        $permissions = [
            'edit posts',
            'delete posts',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // ✅ Create Roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);
        $manager = Role::firstOrCreate(['name' => 'manager']);

        // ✅ Assign Permissions to Admin Role
        $admin->givePermissionTo($permissions);
    }
}
