<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InteriorManagerResource extends JsonResource
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
            'fullname' =>  $this->fullname,
            'phone' => $this->phone,
            'email' => $this->email,
            'location_id' => $this->location_id,
            'city' => $this->city,
            'budget' => $this->budget,
            'vendor_id' =>  $this->vendor_id,
            'type_of_apartment' => $this->type_of_apartment,
            'possession_timeline' => $this->possession_timeline,
            'scope_of_work' => $this->scope_of_work,
            'comments' => $this->comments,
        ];
    }
}
