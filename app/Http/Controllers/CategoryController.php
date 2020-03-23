<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
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
     * @return View
     */
    public function index(): View
    {
        $categories = $this->service->getPagedCategories();

        return view('categories.index')->with(compact('categories'));
    }
}
