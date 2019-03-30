<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
    	'notif',
    	'link',
    	'user_id',
    	'status'
    ];

    public function user()
    {
    	return $this->hasOne('App\User');
    }
}
