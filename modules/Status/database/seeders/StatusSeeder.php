<?php

namespace Modules\Status\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Status\App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Pending', 'Approved', 'Failed'];
        foreach ($statuses as $status) {
            Status::firstOrCreate([
                'name' => $status,
            ]);
        }
    }
}
