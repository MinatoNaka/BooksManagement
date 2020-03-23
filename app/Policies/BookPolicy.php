<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the book.
     *
     * @param User $user
     * @param Book $book
     * @return mixed
     */
    public function view(User $user, Book $book)
    {
        return $user->id === $book->created_by;
    }

    /**
     * Determine whether the user can update the book.
     *
     * @param User $user
     * @param Book $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        return $user->id === $book->created_by;
    }

    /**
     * Determine whether the user can delete the book.
     *
     * @param User $user
     * @param Book $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        return $user->id === $book->created_by;
    }
}
