<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'comment',
    	'reply_id',
    	'post_id',
    	'user_id'
    ];

    // relationship

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function post()
    {
        return $this->belongsTo('App\Model\Post');
    }

}
