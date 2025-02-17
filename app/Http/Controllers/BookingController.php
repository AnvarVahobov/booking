<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Resources\BookingResource;
use App\Services\BookingService;
use Illuminate\Http\Response;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function store(StoreBookingRequest $request)
    {
        $data = $request->toDto()->toArray();

        return new BookingResource($this->bookingService->createBooking($data));
    }

    public function indexByResource($id)
    {
        return BookingResource::collection($this->bookingService->getBookingsByResource($id));
    }

    public function destroy($id)
    {
        $this->bookingService->cancelBooking($id);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
