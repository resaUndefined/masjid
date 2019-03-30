<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kultum_Tarawih extends Model
{
    protected $fillable = [
		'jadwal_id',
		'user_id',
		'jadwal'
	];
	
	protected $table = 'kultum_tarawih';

	public function user()
    {
        return $this->hasOne('App\User');
    }
    
}
