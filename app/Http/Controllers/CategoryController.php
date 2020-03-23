<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    private $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $categories = $this->service->getPagedCategories($request->all());

        return view('categories.index')->with(compact('categories'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('categories.create');
    }

    /**
     * @param StoreCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());
        flash('カテゴリーが登録されました。')->success();

        return redirect()->route('categories.index');
    }
}
