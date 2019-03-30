<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = [
		'tag_name',
		'slug'
	];

    protected $table = 'tag';
}
