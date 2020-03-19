<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedUsers(array $searchParams): LengthAwarePaginator
    {
        $users = User::query();

        if (\Arr::has($searchParams, 'name')) {
            $users->where('name', 'like', "%{$searchParams['name']}%");
        }

        if (\Arr::has($searchParams, 'email')) {
            $users->where('email', 'like', "%{$searchParams['email']}%");
        }

        return $users->sortable()->paginate(15);
    }

    /**
     * @param array $params
     * @return User
     */
    public function store(array $params): User
    {
        return User::create($params);
    }

    /**
     * @param User $user
     * @param array $params
     * @return bool
     */
    public function update(User $user, array $params): bool
    {
        return $user->update($params);
    }
}
