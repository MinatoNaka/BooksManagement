<?php


namespace App\Services;


use App\Models\Book;
use DB;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Throwable;

class BookService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedBooks(array $searchParams): LengthAwarePaginator
    {
        $books = Book::with(['author', 'categories']);

        if (isset($searchParams['title'])) {
            $books->where('title', 'like', "%{$searchParams['title']}%");
        }

        if (isset($searchParams['price'])) {
            $books->where('price', 'like', "%{$searchParams['price']}%");
        }

        if (isset($searchParams['published_at_from'])) {
            $books->where('published_at', '>=', $searchParams['published_at_from']);
        }

        if (isset($searchParams['published_at_to'])) {
            $books->where('published_at', '<=', $searchParams['published_at_to']);
        }

        if (isset($searchParams['author'])) {
            $books->where('author_id', $searchParams['author']);
        }

        if (isset($searchParams['category'])) {
            $books->whereHas('categories', function (Builder $query) use ($searchParams) {
                $query->where('id', $searchParams['category']);
            });
        }

        return $books->sortable()->paginate(15);
    }

    /**
     * @param array $params
     * @return Book
     * @throws Throwable
     */
    public function store(array $params): Book
    {
        return DB::transaction(function () use ($params) {
            $book = Book::create($params);

            if (isset($params['category_ids'])) {
                $book->categories()->attach($params['category_ids']);
            }

            return $book;
        });
    }

    /**
     * @param Book $book
     * @param array $params
     * @return Book
     * @throws Throwable
     */
    public function update(Book $book, array $params): Book
    {
        return DB::transaction(function () use ($book, $params) {
            $book->update($params);

            if (!isset($params['category_ids'])) {
                $params['category_ids'] = [];
            }

            $book->categories()->sync($params['category_ids']);

            return $book;
        });
    }

    /**
     * @param Book $book
     * @return bool|null
     * @throws Exception
     */
    public function destroy(Book $book): ?bool
    {
        return $book->delete();
    }
}