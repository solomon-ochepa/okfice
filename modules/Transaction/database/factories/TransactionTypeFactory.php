<?php

namespace Modules\Transaction\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Transaction\app\Models\TransactionType::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
