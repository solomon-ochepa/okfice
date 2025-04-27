<?php

namespace Modules\Tenant\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Tenant\App\Models\Tenant;
use Modules\User\App\Models\User;

class TenantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Tenant::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $user = User::firstWhere('username', 'demo') ?? User::factory()->create([
            'username' => 'demo',
            'email' => 'demo@example.com'
        ]);

        return [
            'name' => fake()->company(),
            'user_id' => $user->id,
        ];
    }
}
