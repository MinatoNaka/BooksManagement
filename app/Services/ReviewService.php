<?php


namespace App\Services;


use App\Models\Book;
use App\Models\Review;
use Auth;
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

    /**
     * @param Book $book
     * @param array $params
     * @return Review
     */
    public function store(Book $book, array $params): Review
    {
        $params['reviewer_id'] = Auth::user()->id;

        return $book->reviews()->create($params);
    }

    /**
     * @param Review $review
     * @param array $params
     * @return bool
     */
    public function update(Review $review, array $params): bool
    {
        return $review->update($params);
    }
}
