<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersWithRolesSeeder extends Seeder
{
    public function run()
    {
        // ✅ Ensure roles exist
        $adminRole   = Role::firstOrCreate(['name' => 'admin']);
        $userRole    = Role::firstOrCreate(['name' => 'user']);
        $managerRole = Role::firstOrCreate(['name' => 'manager']);

        // ✅ Create Users
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );

        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Normal User',
                'password' => Hash::make('password'),
            ]
        );

        $manager = User::firstOrCreate(
            ['email' => 'manager@example.com'],
            [
                'name' => 'Manager User',
                'password' => Hash::make('password'),
            ]
        );

        // ✅ Assign roles
        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
        $manager->assignRole($managerRole);
    }
}
