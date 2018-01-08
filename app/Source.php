<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function recipes() {
        return $this->hasMany('App\Recipe');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
