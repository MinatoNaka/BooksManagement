<?php


namespace App\Services;


use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CategoryService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedCategories(array $searchParams): LengthAwarePaginator
    {
        $categories = Category::query();

        if (\Arr::has($searchParams, 'name')) {
            $categories->where('name', 'like', "%{$searchParams['name']}%");
        }

        return $categories->sortable()->paginate(15);
    }
}
