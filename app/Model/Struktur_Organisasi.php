<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Struktur_Organisasi extends Model
{
	protected $fillable = [
		'jabatan_id',
		'user_id',
	];

    protected $table = 'struktur__organisasi';
}
