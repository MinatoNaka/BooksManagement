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
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::post('users', 'UsersController@store')->name('users.store');
    Route::get('users/create', 'UsersController@create')->name('users.create');
    Route::delete('users/{user}', 'UsersController@destroy')->name('users.destroy');
    Route::put('users/{user}', 'UsersController@update')->name('users.update');
    Route::get('users/{user}', 'UsersController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');

    /* ------------------------------------------------------------------- *
     * Category
     * ------------------------------------------------------------------- */
    Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::post('categories', 'CategoryController@store')->name('categories.store');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update');
    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');
    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
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
