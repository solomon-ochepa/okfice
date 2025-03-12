<?php

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\User\App\Models\User;

class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * The name of the factory's corresponding model.
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $female = (bool) random_int(0, 1);
        $name = [
            'first_name' => $female ? fake()->firstNameFemale() : fake()->firstNameMale(),
            'last_name' => fake()->unique()->lastName(),
        ];
        $username = "{$name['first_name']}_{$name['last_name']}".Str::random();
        $email = Str::lower("$username@example.com");

        return [
            'first_name' => $name['first_name'],
            'last_name' => $name['last_name'],
            'username' => $username,
            'phone' => fake()->phoneNumber(),
            'email' => $email,
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
