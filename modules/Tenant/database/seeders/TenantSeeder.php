<?php

namespace Modules\Tenant\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tenant\App\Models\Tenant;
use Modules\User\App\Models\User;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstWhere('username', 'demo');
        if ($user !== null) {
            // Create the tenant
            $tenant = Tenant::firstOrCreate([
                'name' => 'Demo',
                'user_id' => $user->id,
            ]);

            // Create tenant default admin user account.
            $tenant->run(function () use ($user) {
                if (! $user->exists) {
                    $user = $user->replicate()->save();
                }
            });

            // Create tenant domain
            $tenant->domains()->firstOrCreate(['domain' => $tenant->slug]);
        }
    }
}
