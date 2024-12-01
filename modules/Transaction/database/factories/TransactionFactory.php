<?php

namespace Modules\Transaction\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Transaction\app\Models\Transaction::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

