<?php

namespace Modules\Permission\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Permission\App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // roles
            'roles.create',
            'roles.index',
            'roles.show',
            'roles.update',
            'roles.delete',
            'roles.restore',
            'roles.delete.permanent',
            // permissions
            'permissions.create',
            'permissions.index',
            'permissions.show',
            'permissions.update',
            'permissions.delete',
            'permissions.restore',
            'permissions.delete.permanent',
        ];

        foreach ($permissions as $role) {
            Permission::firstOrCreate(['name' => $role]);
        }
    }
}
