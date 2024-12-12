<?php

namespace App\Http\Resources;

use Illuminate\Http\Request; 
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'property_address' => $this->property_address,
            'city' => $this->city,
            'description' => $this->description,
            'amount' => $this->price,
            'image' => asset('app/public/').'/'.$this->cover_image,
            'company' =>  $this->company,
            'isActive'=>$this->isActive,
            'user'=> $this->user?->name,
            'type'=>$this->type,
            'no_of_bathrooms' => $this->no_of_bathrooms,
            'no_of_bedrooms' => $this->no_of_bedrooms,
            'location' => $this->location->location_name,
            'pictures' => $this->getMedia('gallery'),
        
        ]
        ;
    }
}
