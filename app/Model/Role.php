<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'role',
    	'level'
    ];

    // relationship

    public function users()
    {
        return $this->hasMany('App\User');
    }
    
}
