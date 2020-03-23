<?php


namespace App\Services;


use App\Models\Category;

class CategoryService
{
    public function getPagedCategories()
    {
        return Category::sortable()->paginate(15);
    }
}
