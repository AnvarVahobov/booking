<?php

namespace App\Http\Requests;

use App\DTO\BookingDTO;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'resource_id' => 'required|exists:resources,id',
            'user_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $data = $this->validated();
            $conflict = Booking::where('resource_id', $data['resource_id'])
                ->where(function ($query) use ($data) {
                    $query->whereBetween('start_time', [$data['start_time'], $data['end_time']])
                        ->orWhereBetween('end_time', [$data['start_time'], $data['end_time']])
                        ->orWhere(function ($query) use ($data) {
                            $query->where('start_time', '<=', $data['start_time'])
                                ->where('end_time', '>=', $data['end_time']);
                        });
                })
                ->exists();

            if ($conflict) {
                $validator->errors()->add('resource_id', 'The resource is already booked for the selected time period.');
            }
        });
    }

    public function toDto():BookingDTO
    {
        return new BookingDTO(
            resourceId: $this->resource_id,
            userId: $this->user_id,
            startTime: Carbon::parse($this->start_time),
            endTime: Carbon::parse($this->end_time)
        );
    }
}
