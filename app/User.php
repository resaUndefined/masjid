<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider',
        'provider_id',
        'role_id',
        'is_active',
        'verified',
        'verification_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // relationship

    public function struktur_orga()
    {
        return $this->hasOne('App\Model\Struktur_Organisasi');
    }


    public function profile()
    {
        return $this->hasOne('App\Model\Profile');
    }


    public function kultum_tarawih()
    {
        return $this->hasOne('App\Model\Kultum_Tarawih');
    }


    public function kultum_shubuh()
    {
        return $this->hasOne('App\Model\Kultum_Shubuh');
    }


    public function kultum_buber()
    {
        return $this->hasOne('App\Model\Kultum_Buber');
    }


    public function imam_tarawih()
    {
        return $this->hasOne('App\Model\Imam_Tarawih');
    }


    public function notification()
    {
        return $this->hasOne('App\Model\Notification');
    }


    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }


    public function mc_tarawihs()
    {
        return $this->hasMany('App\Model\Mc_Tarawih');
    }


    public function mc_shubuhs()
    {
        return $this->hasMany('App\Model\Mc_Shubuh');
    }


    public function jadwal_bilals()
    {
        return $this->hasMany('App\Model\Jadwal_Bilal');
    }


    public function infaqs()
    {
        return $this->hasMany('App\Model\Infaq');
    }


    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }


    public function role()
    {
        return $this->belongsTo('App\Model\Role');
    }
}
