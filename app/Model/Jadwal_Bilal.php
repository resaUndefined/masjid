<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Bilal extends Model
{
    protected $fillable = [
    	'jadwal_id',
    	'user_id',
    	'jadwal'
    ];

    protected $table = 'jadwal_bilal';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
