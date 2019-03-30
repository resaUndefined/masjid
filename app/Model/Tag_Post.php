<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag_Post extends Model
{
	protected $fillable = [
		'post_id',
		'tag_id'
	];

    protected $table = 'tag_post';
}
