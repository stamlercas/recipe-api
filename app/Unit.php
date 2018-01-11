<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
	public $incrementing = false;
	
    public function unit_conversions() {
        return $this->belongsToMany('App\Unit', 'unit_conversions', 'conversion_unit_id', 'unit_id');
    }
}
