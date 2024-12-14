<?php

namespace Modules\User\Database\Seeders;

use Modules\User\App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = '$1Password;';

        $users = [
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'username' => 'admin',
                'phone' => '+2340000000000',
                'email' => 'admin@example.com',
                'password' => $password,
            ],
            [
                'first_name' => 'Demo',
                'last_name' => 'User',
                'username' => 'demo',
                'phone' => '+2340000000001',
                'email' => 'demo@example.com',
                'password' => $password,
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(Arr::only($user, ['username', 'phone', 'email']), $user);
        }
    }
}
