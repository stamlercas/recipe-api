<?php

namespace App\Http\Resources;

use App\Http\Resources\DirectionResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DirectionsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return DirectionResource::collection($this->collection);
    }
}
