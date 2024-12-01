<?php

namespace Modules\Transaction\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Transaction\App\Models\TransactionType;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Savings', 'Loan', 'Dividend', 'Penalty', 'Other'];
        foreach ($types as $type) {
            TransactionType::firstOrCreate([
                'name' => $type,
            ]);
        }
    }
}
