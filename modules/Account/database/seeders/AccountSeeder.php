<?php

namespace Modules\Account\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\App\Models\User;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::doesntHave('accounts')->get();
        foreach ($users as $user) {
            $user->accounts()->create([
                'primary' => true
            ]);
        }
    }
}
