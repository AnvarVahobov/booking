<?php

namespace App\Services;

use App\Repositories\BookingRepository;

class BookingService
{
    protected $bookingRepository;

    public function __construct(BookingRepository $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function createBooking(array $data)
    {
        return $this->bookingRepository->create($data);
    }

    public function getBookingsByResource($resourceId)
    {
        return $this->bookingRepository->getByResourceId($resourceId);
    }

    public function cancelBooking($id)
    {
        return $this->bookingRepository->delete($id);
    }
}
