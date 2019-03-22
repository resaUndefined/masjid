<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = [
    	'jabatan',
    	'job_desc',
    ];

    protected $table = 'jabatan';
}
