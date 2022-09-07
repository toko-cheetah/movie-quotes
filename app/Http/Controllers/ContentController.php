<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class ContentController extends Controller
{
	public function randomQuote(): View
	{
		$quote = Quote::inRandomOrder()->first();
		$movie = Movie::find($quote->movie_id);
		return view('main.index', ['quote' => $quote, 'movie' => $movie]);
	}

	public function movieQuotes(Movie $movie): View
	{
		$quotes = Quote::all();
		return view('main.show', ['movie' => $movie, 'quotes' => $quotes]);
	}
}
