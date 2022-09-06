<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuoteRequest;
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

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$quote = Quote::create($request->validated());
		$quote['thumbnail'] = $request->file('thumbnail')->store('thumbnails');
		$quote->save();

		return redirect()->route('quotes.index');
	}
}
