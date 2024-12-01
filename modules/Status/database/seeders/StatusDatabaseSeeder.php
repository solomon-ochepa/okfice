<?php

namespace Modules\Status\Database\Seeders;

use Illuminate\Database\Seeder;

class StatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            StatusSeeder::class,
        ]);
    }
}
