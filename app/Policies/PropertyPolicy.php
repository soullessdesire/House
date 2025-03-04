<?php

namespace App\Policies;

use App\Models\Property;
use App\Models\User;


class PropertyPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Property $property): bool
    {
        return $property->owner()->is($user) || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Property $property): bool
    {
        return $property->owner()->is($user) || $user->isAdmin();
    }
}
