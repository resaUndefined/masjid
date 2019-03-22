<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'comment',
    	'reply_id',
    	'post_id',
    	'user_id',
    ];
}
