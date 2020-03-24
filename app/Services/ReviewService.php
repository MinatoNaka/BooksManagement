<?php


namespace App\Services;


use App\Models\Book;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ReviewService
{
    /**
     * @param Book $book
     * @param array $searchParams
     * @return LengthAwarePaginator
     */
    public function getPagedReviews(Book $book, array $searchParams): LengthAwarePaginator
    {
        $reviews = $book->reviews();

//        if (isset($searchParams['title'])) {
//            $books->where('title', 'like', "%{$searchParams['title']}%");
//        }
//
//        if (isset($searchParams['price'])) {
//            $books->where('price', 'like', "%{$searchParams['price']}%");
//        }
//
//        if (isset($searchParams['published_at_from'])) {
//            $books->where('published_at', '>=', $searchParams['published_at_from']);
//        }
//
//        if (isset($searchParams['published_at_to'])) {
//            $books->where('published_at', '<=', $searchParams['published_at_to']);
//        }
//
//        if (isset($searchParams['author'])) {
//            $books->where('author_id', $searchParams['author']);
//        }
//
//        if (isset($searchParams['category'])) {
//            $books->whereHas('categories', function (Builder $query) use ($searchParams) {
//                $query->where('id', $searchParams['category']);
//            });
//        }

        return $reviews->sortable()->paginate(15);
    }
}
