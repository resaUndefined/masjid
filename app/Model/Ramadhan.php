<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ramadhan extends Model
{
	protected $fillable = [
		'ramadhan',
		'tema',
	];

    protected $table = 'ramadhan';
}
