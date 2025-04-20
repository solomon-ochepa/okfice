<?php

namespace Modules\Tenancy\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tenancy\App\Models\Client;
use Modules\User\App\Models\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstWhere('username', 'demo');
        if ($user !== null) {
            // Create the client
            $client = Client::firstOrCreate([
                'name' => 'Demo',
                'user_id' => $user->id,
            ]);

            // Create client default admin user account.
            $client->run(function () use ($user) {
                if (! $user->exists) {
                    $user = $user->replicate()->save();
                }
            });

            // Create client domain
            $client->domains()->firstOrCreate(['domain' => $client->slug]);
        }
    }
}
