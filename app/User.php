<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
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

    public function attributes() {
        return $this->hasMany('App\Attribute');
    }

    public function ingredients() {
        return $this->hasMany('App\Ingredient');
    }

    public function nutrients() {
        return $this->hasMany('App\Nutrient');
    }

    public function recipes() {
        return $this->hasMany('App\Recipe');
    }

    public function sources() {
        return $this->hasMany('App\Source');
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }
    public function getJWTCustomClaims() {
        return [];
    }
}
