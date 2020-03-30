<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'guest'], function () {
    /* ------------------------------------------------------------------- *
     * Auth
     * ------------------------------------------------------------------- */
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login.post');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('register.post');
});


Route::group(['middleware' => 'auth'], function () {
    /* ------------------------------------------------------------------- *
     * Auth
     * ------------------------------------------------------------------- */
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    /* ------------------------------------------------------------------- *
     * Home
     * ------------------------------------------------------------------- */
    Route::get('home', 'HomeController@index')->name('home');

    /* ------------------------------------------------------------------- *
     * User
     * ------------------------------------------------------------------- */
    Route::get('users', 'UserController@index')->name('users.index')->middleware(['permission:user-view']);
    Route::post('users', 'UserController@store')->name('users.store')->middleware(['permission:user-edit']);
    Route::get('users/create', 'UserController@create')->name('users.create')->middleware(['permission:user-edit']);
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware(['role:admin', 'permission:user-edit']);
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware(['permission:user-edit']);
    Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware(['permission:user-view']);
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware(['permission:user-edit']);
    Route::delete('users/{user}/avatar', 'UserController@destroyAvatar')->name('users.avatar.destroy')->middleware(['permission:user-edit']);

    /* ------------------------------------------------------------------- *
     * Category
     * ------------------------------------------------------------------- */
    Route::get('categories', 'CategoryController@index')->name('categories.index')->middleware(['permission:category-view']);
    Route::post('categories', 'CategoryController@store')->name('categories.store')->middleware(['permission:category-edit']);
    Route::get('categories/create', 'CategoryController@create')->name('categories.create')->middleware(['permission:category-edit']);
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')->middleware(['permission:category-edit', 'can:delete,category']);
    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')->middleware(['permission:category-edit', 'can:update,category']);
    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')->middleware(['permission:category-view', 'can:view,category']);
    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')->middleware(['permission:category-edit', 'can:update,category']);

    /* ------------------------------------------------------------------- *
     * Book
     * ------------------------------------------------------------------- */
    Route::get('books', 'BookController@index')->name('books.index')->middleware(['permission:book-view']);
    Route::post('books', 'BookController@store')->name('books.store')->middleware(['permission:book-edit']);
    Route::get('books/create', 'BookController@create')->name('books.create')->middleware(['permission:book-edit']);
    Route::get('books/export', 'BookController@export')->name('books.export')->middleware(['permission:book-view']);
    Route::post('books/import', 'BookController@import')->name('books.import')->middleware(['permission:book-edit']);
    Route::delete('books/{book}', 'BookController@destroy')->name('books.destroy')->middleware(['permission:book-edit', 'can:delete,book']);
    Route::put('books/{book}', 'BookController@update')->name('books.update')->middleware(['permission:book-edit', 'can:update,book']);
    Route::get('books/{book}', 'BookController@show')->name('books.show')->middleware(['permission:book-view', 'can:view,book']);
    Route::get('books/{book}/edit', 'BookController@edit')->name('books.edit')->middleware(['permission:book-edit', 'can:update,book']);

    /* ------------------------------------------------------------------- *
     * Review
     * ------------------------------------------------------------------- */
    Route::get('books/{book}/reviews', 'ReviewController@index')->name('books.reviews.index')->middleware(['permission:review-view']);
    Route::post('books/{book}/reviews', 'ReviewController@store')->name('books.reviews.store')->middleware(['permission:review-edit']);
    Route::get('books/{book}/reviews/create', 'ReviewController@create')->name('books.reviews.create')->middleware(['permission:review-edit']);
    Route::delete('reviews/{review}', 'ReviewController@destroy')->name('reviews.destroy')->middleware(['permission:review-edit', 'can:delete,review']);
    Route::put('reviews/{review}', 'ReviewController@update')->name('reviews.update')->middleware(['permission:review-edit', 'can:update,review']);
    Route::get('reviews/{review}/edit', 'ReviewController@edit')->name('reviews.edit')->middleware(['permission:review-edit', 'can:update,review']);
});


Route::get('/example', function () {
    return view('examples.all');
});
Route::get('/form', function () {
    return view('examples.form');
});
Route::get('/table', function () {
    return view('examples.table');
});

Route::any('{all}', function () {
    return redirect()->route('login');
})->where('all', '(.*)');
