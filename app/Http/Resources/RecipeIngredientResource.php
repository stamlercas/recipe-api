<?php

namespace App\Http\Resources;

use App\Unit;
use Illuminate\Http\Resources\Json\Resource;

class RecipeIngredientResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'preparation' => $this->pivot->preparation,
            'quantity' => $this->pivot->quantity,
            'display_quantity' => $this->pivot->display_quantity,
            'unit' => new UnitResource(Unit::find($this->pivot->unit_id))
        ];
    }
}
