<?php

namespace Modules\Tenancy\Database\Seeders;

use Illuminate\Database\Seeder;
use Nwidart\Modules\Traits\PathNamespace;

class TenantsDatabaseSeeders extends Seeder
{
    use PathNamespace;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seeders = glob('modules/*/database/seeders/TenantDatabaseSeeder.php');
        $classes = array_map(fn ($path) => $this->path_namespace(str_replace('.php', '', $path)), $seeders);

        $this->call($classes);
    }
}
