<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donatur_Takjil extends Model
{
    protected $fillable = [
    	'jadwal_id',
    	'members',
    	'jumlah',
    	'jadwal',
    ];

    protected $table = 'donatur__takjil';
}
