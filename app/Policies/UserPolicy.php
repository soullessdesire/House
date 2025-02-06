<?php

namespace App\Policies;


use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserPolicy
{
    public function logged()
    {
        return Auth::check();
    }
    public function admin(User $user)
    {
        return $user->isAdmin();
    }
}
