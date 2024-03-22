<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    public function create(User $user)
    {
        // return $user ? true : false;
        return $user->role === 'admin';
    }

    public function update(User $user)
    {
        // return $user->id == $task->user_id;
        return $user->role === 'admin';
    }

    public function delete(User $user)
    {
        return $user->role === 'admin';
    }

}