<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    public function phone()
    {
        return $this->hasOne("App\Phone");
    }

    public function comment()
    {
        return $this->hasOne("App\Comment");
    }
    public function course()
    {
        return $this->belongsToMany("App\Course");
    }
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

 
    public function getJWTCustomClaims()
    {
        return [];
    }
}
