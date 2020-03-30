<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Storage;

class UserService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedUsers(array $searchParams): LengthAwarePaginator
    {
        $users = User::query();

        if (isset($searchParams['name'])) {
            $users->where('name', 'like', "%{$searchParams['name']}%");
        }

        if (isset($searchParams['email'])) {
            $users->where('email', 'like', "%{$searchParams['email']}%");
        }

        if (isset($searchParams['role'])) {
            $users->role($searchParams['role']);
        }

        return $users->sortable()->paginate(15);
    }

    /**
     * @param array $params
     * @return User
     */
    public function store(array $params): User
    {
        if (isset($params['avatar'])) {
            $avatarPath = Storage::disk('s3')->putFile('avatar', $params['avatar'], 'public');
            $params['avatar'] = $avatarPath;
        }

        $user = User::create($params);
        $user->assignRole($params['role']);

        return $user;
    }

    /**
     * @param User $user
     * @param array $params
     * @return User
     */
    public function update(User $user, array $params): User
    {
        if (isset($params['avatar'])) {
            $avatarPath = Storage::disk('s3')->putFile('avatar', $params['avatar'], 'public');
            $params['avatar'] = $avatarPath;
        }

        $user->update($params);
        $user->syncRoles($params['role']);

        return $user;
    }

    /**
     * @param User $user
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(User $user): ?bool
    {
        return $user->delete();
    }

    /**
     * @param User $user
     * @return bool
     */
    public function destroyAvatar(User $user): bool
    {
        Storage::disk('s3')->delete($user->avatar);

        return $user->update([
            'avatar' => null,
        ]);
    }
}
