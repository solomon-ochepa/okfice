<?php

namespace App\Features;

use Modules\User\App\Models\User;

class Feature
{
    /**
     * The stored name of the feature.
     */
    public string $name;

    /**
     * Resolve the feature's initial value.
     */
    public function resolve(User $user): mixed
    {
        $roles = ['developer', 'beta'];

        return match (true) {
            $user->hasRole($roles) => true,
            default => false,
        };
    }
}
