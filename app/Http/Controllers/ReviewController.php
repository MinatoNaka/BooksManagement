<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use App\Services\ReviewService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    /**
     * @var ReviewService
     */
    private $service;

    public function __construct(ReviewService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Book $book
     * @param Request $request
     * @return View
     */
    public function index(Book $book, Request $request): View
    {
        $reviews = $this->service->getPagedReviews($book, $request->all());

        $reviewers = User::pluck('name', 'id');

        return view('reviews.index')->with(compact('book', 'reviews', 'reviewers'));
    }

    /**
     * @param Book $book
     * @return View
     */
    public function create(Book $book): View
    {
        return view('reviews.create')->with(compact('book'));
    }

    /**
     * @param StoreReviewRequest $request
     * @param Book $book
     * @return RedirectResponse
     */
    public function store(StoreReviewRequest $request, Book $book): RedirectResponse
    {
        $this->service->store($book, $request->validated());
        flash('レビューが登録されました。')->success();

        return redirect()->route('books.reviews.index', $book);
    }

    /**
     * @param Review $review
     * @return View
     */
    public function edit(Review $review): View
    {
        return view('reviews.edit')->with(compact('review'));
    }

    /**
     * @param UpdateReviewRequest $request
     * @param Review $review
     * @return RedirectResponse
     */
    public function update(UpdateReviewRequest $request, Review $review): RedirectResponse
    {
        $this->service->update($review, $request->validated());
        flash('レビューが更新されました。')->success();

        return redirect()->route('books.reviews.index', $review->book);
    }

    /**
     * @param Review $review
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Review $review): RedirectResponse
    {
        $this->service->destroy($review);
        flash('レビューが削除されました。')->success();

        return redirect()->route('books.reviews.index', $review->book);
    }
}
