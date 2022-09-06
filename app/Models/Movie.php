<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Movie extends Model
{
	use HasFactory;

	protected $guarded = ['id'];

	public function quote(): HasOne
	{
		return $this->hasOne(Quote::class);
	}
}
