<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verify_token', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role', 'role_user');
    }


    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }
    public function getInfo(){
//        return implode(' - ', array_filter([$this->name, $this->email]));
        return ('Name: '.$this->name." *|* ".'Email: '.$this->email);
    }

    public function accounts(){
        return $this->hasOne('App\SocialGoogleAccount');
    }

    public function articles(){
        return $this->hasMany('App\Articles');
    }
}
