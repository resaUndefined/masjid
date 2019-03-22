<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'kategori_id',
    	'judul',
    	'isi',
    	'slug',
    	'user_id',
    	'image',
    	'verified',
    	'slider',
    ];
}
