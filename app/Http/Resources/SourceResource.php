<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SourceResource extends Resource
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
            'name' => $this->name,
            'site_url' => $this->site_url,
            'image_url' => $this->image_url,
        ];
    }
}
