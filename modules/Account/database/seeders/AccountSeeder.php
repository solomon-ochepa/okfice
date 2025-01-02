<?php

namespace Modules\Account\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Account\App\Models\Account;
use Modules\User\App\Models\User;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::doesntHave('accounts')->get();
        $last_account_number = (int) Account::max('number');
        foreach ($users as $user) {
            $user->accounts()->create([
                'number' => ++$last_account_number,
            ]);
        }
    }
}
