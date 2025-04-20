<?php

namespace Modules\Transaction\Database\Seeders;

use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TransactionTypeSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
