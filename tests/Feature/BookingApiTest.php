<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Resource;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class BookingApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_resource()
    {
        $response = $this->postJson('/api/resources', [
            'name' => 'Комната A',
            'type' => 'Комната',
            'description' => 'Конференц-зал'
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'data' => ['id', 'name', 'type', 'description']
            ]);
    }

    public function test_create_booking()
    {
        $resource = Resource::factory()->create();
        $response = $this->postJson('/api/bookings', [
            'resource_id' => $resource->id,
            'user_id' => 1,
            'start_time' => Carbon::now()->addHours(1),
            'end_time' => Carbon::now()->addHours(2)
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure([
              'data' => ['id', 'resource_id', 'user_id', 'start_time', 'end_time']
            ]);
    }


    public function test_get_resource_bookings()
    {
        $resource = Resource::factory()->create();
        Booking::factory()->create(['resource_id' => $resource->id]);

        $response = $this->getJson("/api/resources/{$resource->id}/bookings");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'resource_id', 'user_id', 'start_time', 'end_time']
                ]
            ]);
    }

    public function test_delete_booking()
    {
        $booking = Booking::factory()->create();

        $response = $this->deleteJson("/api/bookings/{$booking->id}");

        $response->assertStatus(204);
    }
}
