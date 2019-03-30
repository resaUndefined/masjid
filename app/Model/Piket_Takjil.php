<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Piket_Takjil extends Model
{
	protected $fillable = [
		'jadwal_id',
		'members',
		'jadwal'
	];

    protected $table = 'piket__takjil';
}
