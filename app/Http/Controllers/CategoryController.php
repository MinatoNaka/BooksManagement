<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Exception;
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

    /**
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('categories.edit')->with(compact('category'));
    }

    /**
     * @param Category $category
     * @param UpdateCategoryRequest $request
     * @return RedirectResponse
     */
    public function update(Category $category, UpdateCategoryRequest $request): RedirectResponse
    {
        $this->service->update($category, $request->validated());
        flash('カテゴリーが更新されました。')->success();

        return redirect()->route('categories.index');
    }

    /**
     * @param Category $category
     * @return View
     */
    public function show(Category $category): View
    {
        return view('categories.show')->with(compact('category'));
    }

    /**
     * @param Category $category
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Category $category): RedirectResponse
    {
        $this->service->destroy($category);
        flash('カテゴリーが削除されました。')->success();

        return redirect()->route('categories.index');
    }
}
