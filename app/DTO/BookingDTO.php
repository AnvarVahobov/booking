<?php

namespace App\DTO;

use Carbon\Carbon;
use DateTime;

class BookingDTO
{
    public function __construct(
       public int $resourceId,
       public int $userId,
       public Carbon $startTime,
       public Carbon $endTime
    )
    {
    }

    public function toArray():array
    {
        return [
            'resource_id' => $this->resourceId,
            'user_id' => $this->userId,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
        ];
    }
}
