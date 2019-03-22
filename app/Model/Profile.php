<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
		'user_id',
		'nama',
		'ttl',
		'gender',
		'thumbnail',
		'email',
		'facebook',
		'ig',
		'twitter',
	];

    protected $table = 'profile';
}
