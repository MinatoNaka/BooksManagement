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

    Route::get('home', 'HomeController@index')->name('home');

    Route::resource('users', 'UsersController');
    Route::resource('categories', 'CategoryController');
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
