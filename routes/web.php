<?php

use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LanguageController;
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

Route::group(['controller' => ContentController::class], function () {
	Route::get('/', 'randomQuote')->name('home');
	Route::get('/movies/{movie}', 'movieQuotes')->name('movie_quotes');
});

Route::view('login', 'login.index')->name('login.page')->middleware('guest');

Route::group(['controller' => AuthController::class], function () {
	Route::post('login', 'login')->name('login')->middleware('guest');
	Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware('auth')->group(function () {
	Route::view('admin/movies/create', 'admin.movies.create')->name('movies.create');

	Route::group(['controller' => MovieController::class], function () {
		Route::get('admin/movies', 'index')->name('movies.index');
		Route::post('admin/movies', 'store')->name('movies.store');
		Route::get('admin/movies/{movie}/edit', 'edit')->name('movies.edit');
		Route::put('admin/movies/{movie}', 'update')->name('movies.update');
		Route::delete('admin/movies/{movie}', 'destroy')->name('movies.destroy');
	});

	Route::group(['controller' => QuoteController::class], function () {
		Route::get('admin/quotes', 'index')->name('quotes.index');
		Route::get('admin/quotes/create', 'create')->name('quotes.create');
		Route::post('admin/quotes', 'store')->name('quotes.store');
		Route::get('admin/quotes/{quote}/edit', 'edit')->name('quotes.edit');
		Route::put('admin/quotes/{quote}', 'update')->name('quotes.update');
		Route::delete('admin/quotes/{quote}', 'destroy')->name('quotes.destroy');
	});
});

Route::get('change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
