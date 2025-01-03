<?php

namespace Modules\Payment\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Payment\App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = [
            'Bank Transfer'
        ];

        foreach ($methods as $method) {
            PaymentMethod::firstOrCreate([
                'name' => $method,
            ]);
        }
    }
}
