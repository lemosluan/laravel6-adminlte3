<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function index(User $auth)
    {
        return true;
    }

    public function create(User $auth)
    {
        return true;
    }

    public function edit(User $auth, User $user)
    {
        return true;
    }

    public function destroy(User $auth)
    {
        return true;
    }
}
