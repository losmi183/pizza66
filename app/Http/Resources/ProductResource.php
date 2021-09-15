<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'slug' => $this->slug,
            'name' => $this->name,
            'content' => $this->content,
            'image' => $this->image,
            'badge' => $this->badge,
            'prices' => $this->prices,
            'discount' => $this->discount,
            'price' => $this->price,
        ];
    }
}
