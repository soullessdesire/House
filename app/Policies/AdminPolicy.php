<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdminPolicy
{
    public function admin(User $user)
    {
        return $user->getAttribute('role') !== 'Admin';
    }
}
