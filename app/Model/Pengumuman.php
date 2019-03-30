<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $fillable = [
    	'pengumuman',
    	'slug',
    	'isi',
    	'file'
    ];

    protected $table = 'pengumuman';
}
