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
            'clients.create',
            'clients.index',
            'clients.show',
            'clients.edit',
            'clients.delete',
            'clients.delete.trash',
            'clients.delete.restore',
            'clients.delete.permanent',
            // Administration
            'admin.clients.create',
            'admin.clients.index',
            'admin.clients.show',
            'admin.clients.edit',
            'admin.clients.delete',
            'admin.clients.delete.trash',
            'admin.clients.delete.restore',
            'admin.clients.delete.permanent',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }
    }
}
