<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Ramadhan extends Model
{
    protected $fillable = [
    	'nama_jadwal',
    	'ramadhan_id',
    	'jadwal',
    	'kode',
    	'keterangan',
    ];

    protected $table = 'jadwal_ramadhan';
}
