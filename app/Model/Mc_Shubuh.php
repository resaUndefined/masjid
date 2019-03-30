<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mc_Shubuh extends Model
{
    protected $fillable = [
		'jadwal_id',
		'user_id',
		'jadwal'
	];
	
    protected $table = 'mc_shubuh';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
