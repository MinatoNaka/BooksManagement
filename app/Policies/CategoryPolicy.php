<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Category $category
     * @return bool
     */
    public function view(User $user, Category $category): bool
    {
        return $user->id === $category->created_by;
    }

    /**
     * @param User $user
     * @param Category $category
     * @return bool
     */
    public function update(User $user, Category $category): bool
    {
        return $user->id === $category->created_by;
    }

    /**
     * @param User $user
     * @param Category $category
     * @return bool
     */
    public function delete(User $user, Category $category): bool
    {
        return $user->id === $category->created_by;
    }
}
