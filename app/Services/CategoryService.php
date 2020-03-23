<?php


namespace App\Services;


use App\Models\Category;
use Exception;
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

        if (isset($searchParams['name'])) {
            $categories->where('name', 'like', "%{$searchParams['name']}%");
        }

        return $categories->sortable()->paginate(15);
    }

    /**
     * @param array $params
     * @return Category
     */
    public function store(array $params): Category
    {
        return Category::create($params);
    }

    /**
     * @param Category $category
     * @param array $params
     * @return bool
     */
    public function update(Category $category, array $params): bool
    {
        return $category->update($params);
    }

    /**
     * @param Category $category
     * @return bool|null
     * @throws Exception
     */
    public function destroy(Category $category): ?bool
    {
        return $category->delete();
    }
}
