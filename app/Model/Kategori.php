<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
    	'kategori',
    	'slug',
    	'deskripsi',
    ];

    protected $table = 'kategori';
}
