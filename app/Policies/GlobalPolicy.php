<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GlobalPolicy
{
    use HandlesAuthorization;


    public function create(User $user)
    {
        return $user->hasAnyRole(['admin', 'librarian']);
    }
    
    public function view(User $user)
    {
        return true;
    }

    public function update(User $user)
    {
        return $user->hasAnyRole(['admin', 'librarian']);
    }

    public function delete(User $user)
    {
        return $user->hasRole('admin');
    }

}
