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
		return view('main.index', ['quote' => $quote]);
	}

	public function movieQuotes(Movie $movie): View
	{
		$quotes = Quote::all();
		return view('main.show', ['movie' => $movie, 'quotes' => $quotes]);
	}
}
