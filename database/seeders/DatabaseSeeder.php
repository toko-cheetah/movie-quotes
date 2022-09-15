<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		User::factory()->create([
			'name'     => 'Jesse James',
			'email'    => 'jessejames@mail.com',
			'password' => Hash::make('jessejames'),
		]);

		$movie = Movie::factory()->create([
			'title' => [
				'en' => 'The Assassination of Jesse James by the Coward Robert Ford',
				'ka' => 'ჯესი ჯეიმსის მკვლელობა ლაჩარი რობერტ ფორდის მიერ',
			],
		]);

		Quote::factory()->create([
			'body' => [
				'en' => 'Doesn\'t that picture look dusty?',
				'ka' => 'ეს სურათი მტვრიანია, არა?',
			],
			'thumbnail' => 'images/olPNyxhsy3F7qTC5ZbNOpfOMObDtGldyA9DvTDMh.png',
			'movie_id'  => $movie->id,
		]);
	}
}
