<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MoversResource extends JsonResource
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
            'location_to' => $this->location_to,
            'location_from' => $this->location_from,
            'dateofmovement' => $this->date_of_movement,
            'comment' => $this->comment,
        ];
    }
}
