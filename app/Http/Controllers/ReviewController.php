<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Services\ReviewService;
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
}
