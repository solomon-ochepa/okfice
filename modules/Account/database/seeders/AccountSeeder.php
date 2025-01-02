<?php

namespace Modules\Account\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Modules\Account\App\Models\Account;
use Modules\User\App\Models\User;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Business Accounts
        $last_account_number = (int) Account::max('number');
        $accounts = [
            ['name' => 'Cash', 'type' => 'asset'],
            ['name' => 'Bank', 'type' => 'asset'],
        ];
        foreach ($accounts as $account) {
            $account['number'] = ++$last_account_number;

            Account::firstOrCreate(Arr::only($account, ['name']), $account);
        }

        // Users' accounts
        $users = User::doesntHave('accounts')->get();
        $last_account_number = (int) Account::max('number');
        foreach ($users as $user) {
            $user->accounts()->create([
                'number' => ++$last_account_number,
            ]);
        }
    }
}
