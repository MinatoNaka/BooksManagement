<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\View\View;

class UsersController extends Controller
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
     * @return View
     */
    public function index(): View
    {
        $users = $this->service->getPagedUsers();

        return view('users.index')->with(compact('users'));
    }
}
