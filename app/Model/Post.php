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
    	'slider'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function kategori()
    {
        return $this->belongsTo('App\Model\Kategori');
    }


    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }

}
