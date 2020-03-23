<?php


namespace App\Services;


use App\Models\Book;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BookService
{
    /**
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedBooks(array $searchParams): LengthAwarePaginator
    {
        $books = Book::with(['author', 'categories']);

        return $books->sortable()->paginate(15);
    }
}
