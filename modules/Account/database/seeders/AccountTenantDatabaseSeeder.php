<?php

namespace Modules\Account\Database\Seeders;

use Illuminate\Database\Seeder;

class AccountTenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            AccountSeeder::class,
        ]);
    }
}
