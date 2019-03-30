<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infaq extends Model
{
    protected $fillable = [
    	'total',
    	'user_id'
    ];

    protected $table = 'infaq';

    // relationship

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
