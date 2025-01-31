<?php

namespace App\Policies;

use App\Models\User;

class CoursePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function update(User $user)
{
    return in_array($user->role, ['admin', 'instructor']);
}

public function delete(User $user)
{
    return $user->role === 'admin';
}

}
