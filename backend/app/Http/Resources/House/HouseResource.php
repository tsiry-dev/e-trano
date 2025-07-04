<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HouseResource extends JsonResource
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
            'address' => $this->address,
            'city' => $this->city,
            'price_per_month' => $this->price_per_month,
            'description' => $this->description,
            'reservation_price' => $this->reservation_price,
            'status' => $this->status,
            // 'localisation' => $this->whenLoaded('localisation'),
             'picture' => $this->gallery->first()?->picture ?? 'No picture',
        ];
    }
}
