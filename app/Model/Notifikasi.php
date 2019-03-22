<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $fillable = [
    	'notifikasi',
    	'url',
    	'user_id',
    	'status',
    ];

    protected $table = 'notifikasi';
}
