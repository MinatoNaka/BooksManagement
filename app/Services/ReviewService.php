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
        $reviews = $book->reviews()->with('reviewer');

        if (isset($searchParams['reviewer'])) {
            $reviews->where('reviewer_id', $searchParams['reviewer']);
        }

        if (isset($searchParams['comment'])) {
            $reviews->where('comment', 'like', "%{$searchParams['comment']}%");
        }

        if (isset($searchParams['star'])) {
            $reviews->where('star', '>=', $searchParams['star']);
        }

        return $reviews->sortable()->paginate(15);
    }
}
