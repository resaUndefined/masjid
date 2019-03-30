<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Struktur_Organisasi extends Model
{
	protected $fillable = [
		'jabatan_id',
		'user_id'
	];

    protected $table = 'struktur__organisasi';

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Model\Jabatan');
    }

}
