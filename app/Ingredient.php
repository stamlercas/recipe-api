<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
	public function recipes() {
        return $this->belongsToMany('App\Recipe', 'recipes_ingredients')->withPivot('unit_id', 'preparation', 'quantity', 'display_quantity');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
