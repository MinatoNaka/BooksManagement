<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Category;
use App\Models\User;
use App\Services\BookService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * @var BookService
     */
    private $service;

    public function __construct(BookService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $books = $this->service->getPagedBooks($request->all());

        $authors = User::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');

        return view('books.index')->with(compact('books', 'authors', 'categories'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $authors = User::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');

        return view('books.create')->with(compact('authors', 'categories'));
    }

    /**
     * @param StoreBookRequest $request
     * @return RedirectResponse
     */
    public function store(StoreBookRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());
        flash('本が登録されました。')->success();

        return redirect()->route('books.index');
    }
}
