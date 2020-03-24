<?php

namespace App\Policies;

use App\Models\Review;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the review.
     *
     * @param User $user
     * @param Review $review
     * @return mixed
     */
    public function update(User $user, Review $review)
    {
        return $user->id === $review->created_by;
    }

    /**
     * Determine whether the user can delete the review.
     *
     * @param User $user
     * @param Review $review
     * @return mixed
     */
    public function delete(User $user, Review $review)
    {
        return $user->id === $review->created_by;
    }
}
