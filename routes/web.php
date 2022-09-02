<?php

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

Route::view('login', 'session.create')->name('login.page')->middleware('guest');

Route::group(['controller' => AuthController::class], function () {
	Route::post('login', 'login')->name('login')->middleware('guest');
	Route::post('logout', 'logout')->name('logout')->middleware('auth');
});
