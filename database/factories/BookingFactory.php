<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Resource;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'resource_id' => Resource::factory(),
            'user_id' => $this->faker->randomDigitNotNull,
            'start_time' => Carbon::now()->addHours(1)->toDateTimeString(),
            'end_time' => Carbon::now()->addHours(2)->toDateTimeString(),
        ];
    }
}
