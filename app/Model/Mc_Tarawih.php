<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mc_Tarawih extends Model
{
    protected $fillable = [
		'jadwal_id',
		'user_id',
		'jadwal',
	];
	
    protected $table = 'mc_tarawih';
}
