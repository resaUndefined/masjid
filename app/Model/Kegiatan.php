<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
    	'kegiatan',
    	'slug',
    	'isi',
    	'slider'
    ];

    protected $table = 'kegiatan';
}
