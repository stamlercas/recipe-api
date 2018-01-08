<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrient extends Model
{
	public function recipes() {
        return $this->belongsToMany('App\Recipe', 'recipes_nutrients');
    }

    public function unit() {
        return $this->belongsTo('App\Unit');
    }
}
