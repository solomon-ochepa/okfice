<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Modules\Role\App\Models\Role;
use Modules\User\App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'password';

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
            $user = User::firstOrCreate(Arr::only($user, ['username', 'phone', 'email']), $user);

            $user->assignRole((Role::findOrCreate('user')));
            if ($user->username === 'admin') {
                $user->assignRole((Role::findOrCreate('admin')));
            }
        }
    }
}
