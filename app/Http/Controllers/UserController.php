<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $users = $this->service->getPagedUsers($request->all());

        $roles = Role::all()->pluck('name', 'name');

        return view('users.index')->with(compact('users', 'roles'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $roles = Role::all()->pluck('name', 'name');

        return view('users.create')->with(compact('roles'));
    }

    /**
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $user = $this->service->store($request->validated());
        event(new UserRegistered($user));

        flash('ユーザが登録されました。')->success();

        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        $roles = Role::all()->pluck('name', 'name');

        return view('users.edit')->with(compact('user', 'roles'));
    }

    /**
     * @param User $user
     * @param UpdateUserRequest $request
     * @return RedirectResponse
     */
    public function update(User $user, UpdateUserRequest $request): RedirectResponse
    {
        $this->service->update($user, $request->validated());
        flash('ユーザが更新されました。')->success();

        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('users.show')->with(compact('user'));
    }

    /**
     * @param User $user
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(User $user): RedirectResponse
    {
        $this->service->destroy($user);
        flash('ユーザが削除されました。')->success();

        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroyAvatar(User $user): RedirectResponse
    {
        $this->service->destroyAvatar($user);
        flash('アバターが削除されました。')->success();

        return redirect()->route('users.edit', $user);
    }
}
