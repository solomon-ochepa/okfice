<?php

namespace Modules\Tenancy\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Permission\App\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // User
            'tenants.create',
            'tenants.index',
            'tenants.show',
            'tenants.edit',
            'tenants.delete',
            'tenants.delete.trash',
            'tenants.delete.restore',
            'tenants.delete.permanent',
            // Administration
            'admin.tenants.create',
            'admin.tenants.index',
            'admin.tenants.show',
            'admin.tenants.edit',
            'admin.tenants.delete',
            'admin.tenants.delete.trash',
            'admin.tenants.delete.restore',
            'admin.tenants.delete.permanent',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }
    }
}
