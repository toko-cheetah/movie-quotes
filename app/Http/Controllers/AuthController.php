<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		if (auth()->attempt($request->validated()))
		{
			session()->regenerate();
			return redirect()->route('home');
		}

		throw ValidationException::withMessages([
			'email' => __('login.not_verified'),
		]);
		return back();
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('home');
	}
}
