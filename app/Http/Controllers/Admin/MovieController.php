<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMovieRequest;
use App\Http\Requests\Admin\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		$movies = Movie::all();
		return view('admin.movies.index', ['movies' => $movies]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$movie = new Movie($request->validated());
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();
		return redirect()->route('movies.index');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
	{
		$movie->update($request->validated());
		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();
		return redirect()->route('movies.index');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return back();
	}
}
