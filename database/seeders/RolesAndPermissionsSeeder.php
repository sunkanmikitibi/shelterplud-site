<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Misc 
        $miscPermission = Permission::create(['name' => 'N/A']);

        //User Model
        $userPermission1 = Permission::create(['name' => 'create: user']);
        $userPermission2 = Permission::create(['name' => 'read: user']);
        $userPermission3 = Permission::create(['name' => 'update: user']);
        $userPermission4 = Permission::create(['name' => 'delete: user']);

        //Role Model
        $rolePermission1 = Permission::create(['name' => 'create: role']);
        $rolePermission2 = Permission::create(['name' => 'read: role']);
        $rolePermission3 = Permission::create(['name' => 'update: role']);
        $rolePermission4 = Permission::create(['name' => 'delete: role']);

        //Permision Model
        $permission1 = Permission::create(['name' => 'create: permission']);
        $permission2 = Permission::create(['name' => 'read: permission']);
        $permission3 = Permission::create(['name' => 'update: permission']);
        $permission4 = Permission::create(['name' => 'delete: permission']);

        //Admins
        $adminPermission1 = Permission::create(['name' => 'read: admin']);
        $adminPermission2 = Permission::create(['name' => 'update: admin']);

        //create admins
        $userRole = Role::create(['name' => 'user'])->syncPermissions([
            $miscPermission,
        ]);

        $superAdminRole = Role::create(['name' => 'super-admin'])->syncPermissions(
            [
                $userPermission1,
                $userPermission2,
                $userPermission3,
                $userPermission4,
                $rolePermission1,
                $rolePermission2,
                $rolePermission3,
                $rolePermission4,
                $permission1,
                $permission2,
                $permission3,
                $permission4,
                $adminPermission1,
                $adminPermission2,
            ]
        );

        $adminRole = Role::create(['name' => 'admin'])->syncPermissions(
            [
                $userPermission2,
                $rolePermission2,
                $permission2,
                $adminPermission1,
            ]
        );

        $agentRole = Role::create(['name' => 'agents'])->syncPermissions(
            [
                $adminPermission1,
            ]
        );

        User::create(
            [
                'name' => 'super admin',
                'email' => 'admin@shelterplug.test',
                'is_admin' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole($superAdminRole);

        User::create(
            [
                'name' => 'admin manager',
                'email' => 'manager@shelterplug.test',
                'is_admin' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole($adminRole);

        User::create(
            [
                'name' => 'agents',
                'email' => 'staff@shelterplug.test',
                'is_admin' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        )->assignRole($agentRole);

        for ($i = 1; $i < 50; $i++) {
            User::Create(
                [
                    'name' => 'User ' . $i,
                    'is_admin' => 0,
                    'email' => 'test' . $i . '@shelterplug.test',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(10),

                ]
            )->assignRole($userRole);
        }
    }
}
