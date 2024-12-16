<?php

namespace Modules\Account\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;
use Modules\Account\App\Models\Account;
use Modules\User\App\Models\User;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => Auth::check() ? Auth::id() : User::all()->random()->id,
        ];
    }
}
