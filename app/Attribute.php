<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
	public function recipes() {
        return $this->hasMany('App\Recipe', 'recipes_attributes');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
