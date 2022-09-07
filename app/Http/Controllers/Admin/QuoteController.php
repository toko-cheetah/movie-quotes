<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuoteRequest;
use App\Http\Requests\Admin\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index(): View
	{
		$quotes = Quote::all();
		return view('admin.quotes.index', ['quotes' => $quotes]);
	}

	public function create(): View
	{
		$movies = Movie::all();
		return view('admin.quotes.create', ['movies' => $movies]);
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$quote = Quote::create($request->validated());
		$quote['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
		$quote->save();

		return redirect()->route('quotes.index');
	}

	public function edit(Quote $quote): View
	{
		$movies = Movie::all();
		return view('admin.quotes.edit', ['quote' => $quote, 'movies' => $movies]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$quote->update($request->validated());

		if ($request->file('thumbnail'))
		{
			$quote['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
			$quote->save();
		}

		return redirect()->route('quotes.index');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return back();
	}
}
