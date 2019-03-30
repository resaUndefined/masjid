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
    	'keterangan'
    ];

    protected $table = 'jadwal_ramadhan';

    public function ramadhan()
    {
    	return $this->belongsTo('App\Model\Ramadhan');
    }


    public function jadwal_bilals()
    {
    	return $this->hasMany('App\Model\Jadwal_Bilal');
    }


    public function imam_tarawihs()
    {
    	return $this->hasMany('App\Model\Imam_Tarawih');
    }


    public function imam_tarawihs()
    {
    	return $this->hasMany('App\Model\Imam_Tarawih');
    }


    public function kultum_bubers()
    {
    	return $this->hasMany('App\Model\Kultum_Buber');
    }


    public function kultum_shubuhs()
    {
    	return $this->hasMany('App\Model\Kultum_Shubuh');
    }


    public function kultum_tarawihs()
    {
    	return $this->hasMany('App\Model\Kultum_Tarawih');
    }


    public function donatur_takjils()
    {
    	return $this->hasMany('App\Model\Donatur_Takjil');
    }


    public function mc_tarawihs()
    {
    	return $this->hasMany('App\Model\Mc_Tarawih');
    }


    public function mc_shubuhs()
    {
    	return $this->hasMany('App\Model\Mc_Shubuh');
    }


    public function piket_takjils()
    {
    	return $this->hasMany('App\Model\Piket_Takjil');
    }

}
