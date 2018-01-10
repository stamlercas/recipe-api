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


    public function scopeAllergies($query) {
    	return $this->where('type' , 'allergies');
    }

    public function scopeCourses($query) {
    	return $this->where('type' , 'courses');
    }

    public function scopeCuisines($query) {
    	return $this->where('type' , 'cuisines');
    }

    public function scopeDiets($query) {
    	return $this->where('type' , 'diets');
    }

    public function scopeHolidays($query) {
    	return $this->where('type' , 'holidays');
    }
}
