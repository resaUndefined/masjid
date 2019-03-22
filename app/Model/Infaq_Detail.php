<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infaq_Detail extends Model
{
    protected $fillable = [
    	'infaq_id',
    	'tanggal',
    	'tipe',
    	'nominal',
    	'keterangan',
    ];

    protected $table = 'infaq_detail';
}
