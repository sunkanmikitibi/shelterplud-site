<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyManagerResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'state_id' => $this->state_id,
            'type_of_house' => $this->type_of_house,
            'vendor_id' => $this->vendor_id,
            'expected_rent' => $this->expected_rent,
            'comments' => $this->comments,
        ];
    }
}
