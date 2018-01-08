<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	public function attributes() {
        return $this->belongsToMany('App\Attribute', 'recipes_attributes');
    }

    public function directions() {
        return $this->hasMany('App\Direction');
    }

	public function ingredients() {
        return $this->belongsToMany('App\Ingredient', 'recipes_ingredients');
    }

    public function nutrients() {
        return $this->belongsToMany('App\Nutrient', 'recipes_nutrients');
    }

    public function source() {
    	return $this->belongsTo('App\Source');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
