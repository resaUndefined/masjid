<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kegiatan_Image extends Model
{
    protected $fillable = [
    	'filename',
    	'kegiatan_id'
    ];
}
