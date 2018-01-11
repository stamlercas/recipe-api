<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RecipeResource extends Resource
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
            'title' => $this->title,
            'servings' => $this->servings,
            'total_time' => $this->total_time,
            'prep_time' => $this->prep_time,
            'cook_time' => $this->cook_time,
            'image_url' => $this->image_url,
            'source_url' => $this->source_url,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'source' => new SourceResource($this->source),
            'ingredients' => new IngredientsResource($this->ingredients),
            'directions' => new DirectionsResource($this->directions)
        ];
    }
}
