<?php

use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\AuthController;
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

Route::view('/', 'index')->name('home');

Route::view('login', 'login.index')->name('login.page')->middleware('guest');

Route::group(['controller' => AuthController::class], function () {
	Route::post('login', 'login')->name('login')->middleware('guest');
	Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

Route::view('admin/movies/create', 'admin.movies.create')->name('movies.create');

Route::group(['controller' => MovieController::class], function () {
	Route::get('admin/movies', 'index')->name('movies.index');
	Route::post('admin/movies', 'store')->name('movies.store');
});

Route::view('admin/quotes/create', 'admin.quotes.create')->name('quotes.create');

Route::group(['controller' => QuoteController::class], function () {
	Route::get('admin/quotes', 'index')->name('quotes.index');
	Route::post('admin/quotes', 'store')->name('quotes.store');
});
