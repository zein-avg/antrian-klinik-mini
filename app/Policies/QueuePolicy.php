<?php

namespace App\Policies;

use App\Models\Queue;
use App\Models\User;

class QueuePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Queue $queue): bool
    {
        return $user->isAdmin() || $user->id === $queue->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return !$user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Queue $queue): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model (cancel).
     */
    public function delete(User $user, Queue $queue): bool
    {
        // User can only cancel their own queue if status is WAITING
        return !$user->isAdmin()
            && $user->id === $queue->user_id
            && $queue->canBeCanceled();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Queue $queue): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Queue $queue): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can call next queue.
     */
    public function callNext(User $user): bool
    {
        return $user->isAdmin();
    }
}