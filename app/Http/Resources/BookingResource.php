<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'resource_id' => $this->resource_id,
            'user_id' => $this->user_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
        ];
    }
}
