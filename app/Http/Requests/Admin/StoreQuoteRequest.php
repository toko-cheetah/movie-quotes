<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'body_en'        => 'required',
			'body_ka'        => 'required',
			'thumbnail'      => 'required|image',
			'movie_id'       => 'required',
		];
	}
}
