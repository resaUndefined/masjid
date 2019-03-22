<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kultum_Buber extends Model
{
	protected $fillable = [
		'jadwal_id',
		'user_id',
		'jadwal',
	];
    protected $table = 'kultum_buber';
}
