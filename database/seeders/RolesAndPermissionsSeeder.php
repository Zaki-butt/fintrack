<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /*
        |--------------------------------------------------------------------------
        | Permissions
        |--------------------------------------------------------------------------
        | We separate permissions logically:
        | - User Finance: for regular users managing their own income & expenses.
        | - Admin Management: for system-level administration.
        */

        $permissions = [
            // Finance (User only)
            'view own income',
            'create own income',
            'edit own income',
            'delete own income',

            'view own expense',
            'create own expense',
            'edit own expense',
            'delete own expense',

            'view reports',

            // Admin System Permissions (no access to user data)
            'manage users',
            'manage settings',
            'manage categories',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user  = Role::firstOrCreate(['name' => 'user']);

        /*
        |--------------------------------------------------------------------------
        | Role Permission Assignments
        |--------------------------------------------------------------------------
        */

        // Admin — can only manage system stuff
        $admin->givePermissionTo([
            'manage users',
            'manage settings',
            'manage categories',
        ]);

        // User — can manage their own financial records
        $user->givePermissionTo([
            'view own income', 'create own income', 'edit own income', 'delete own income',
            'view own expense', 'create own expense', 'edit own expense', 'delete own expense',
            'view reports'
        ]);
    }
}
