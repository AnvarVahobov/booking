<?php

namespace App\Repositories;

use App\Models\Booking;

class BookingRepository
{
    public function create(array $data)
    {
        return Booking::create($data);
    }

    public function getByResourceId($resourceId)
    {
        return Booking::where('resource_id', $resourceId)->get();
    }

    public function delete($id)
    {
        return Booking::destroy($id);
    }
}
