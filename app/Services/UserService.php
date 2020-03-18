<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    /**
     * @return LengthAwarePaginator
     */
    public function getPagedUsers(): LengthAwarePaginator
    {
        return User::paginate(15);
    }
}
