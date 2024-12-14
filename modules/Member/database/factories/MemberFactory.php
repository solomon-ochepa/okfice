<?php

namespace Modules\Member\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Member\app\Models\Member::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
