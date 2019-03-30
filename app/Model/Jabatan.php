<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = [
    	'jabatan',
    	'job_desc'
    ];

    protected $table = 'jabatan';

    public function struktur_organisasis()
    {
        return $this->hasMany('App\Model\Struktur_Organisasi');
    }
    
}
