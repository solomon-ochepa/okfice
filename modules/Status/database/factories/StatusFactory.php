<?php

namespace Modules\Status\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Status\app\Models\Status::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

