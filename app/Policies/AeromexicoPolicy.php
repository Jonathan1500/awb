<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Aeromexico;
use Illuminate\Auth\Access\HandlesAuthorization;

class AeromexicoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_aeromexico');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('view_aeromexico');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_aeromexico');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('update_aeromexico');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('delete_aeromexico');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_aeromexico');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('force_delete_aeromexico');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_aeromexico');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('restore_aeromexico');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_aeromexico');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Aeromexico $aeromexico): bool
    {
        return $user->can('replicate_aeromexico');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_aeromexico');
    }
}
