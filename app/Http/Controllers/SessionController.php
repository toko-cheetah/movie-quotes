<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		return view('session.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email' => 'Your provided credentials could not be verified',
			]);
		}

		session()->regenerate();

		return redirect('/');
	}

	public function destroy()
	{
		auth()->logout();

		return redirect('/');
	}
}
