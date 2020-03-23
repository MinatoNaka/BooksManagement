<?php

namespace App\Http\Controllers;

use App\Services\BookService;
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

        return view('books.index')->with(compact('books'));
    }
}
