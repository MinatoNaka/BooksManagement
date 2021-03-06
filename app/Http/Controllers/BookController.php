<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportBookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Services\BookService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use League\Csv\CannotInsertRecord;
use Throwable;

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
     * @throws Throwable
     */
    public function store(StoreBookRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());
        flash('本が登録されました。')->success();

        return redirect()->route('books.index');
    }

    /**
     * @param Book $book
     * @return View
     */
    public function edit(Book $book): View
    {
        $authors = User::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');

        return view('books.edit')->with(compact('book', 'authors', 'categories'));
    }

    /**
     * @param Book $book
     * @param UpdateBookRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(Book $book, UpdateBookRequest $request): RedirectResponse
    {
        $this->service->update($book, $request->validated());
        flash('本が更新されました。')->success();

        return redirect()->route('books.index');
    }

    /**
     * @param Book $book
     * @return View
     */
    public function show(Book $book): View
    {
        return view('books.show')->with(compact('book'));
    }

    /**
     * @param Book $book
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Book $book): RedirectResponse
    {
        if ($this->service->destroy($book)) {
            flash('本が削除されました。')->success();
        }

        return redirect()->route('books.index');
    }

    /**
     * @param Request $request
     * @return Response
     * @throws CannotInsertRecord
     */
    public function export(Request $request): Response
    {
        return $this->service->export($request->all());
    }

    /**
     * @param ImportBookRequest $request
     * @return RedirectResponse
     */
    public function import(ImportBookRequest $request): RedirectResponse
    {
        $result = $this->service->import($request->file('csv'));

        if (!$result['result']) {
            flash('本の登録ができませんでした。')->error();
            flash($result['errorMessages'])->error();

            return redirect()->route('books.index');
        }

        flash("本が{$result['rowCount']}件登録されました。")->success();

        return redirect()->route('books.index');
    }
}
