<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/bookings",
 *     tags={"Booking"},
 *     summary="Create a new booking",
 *     @OA\RequestBody(
 *          @OA\MediaType(
 *              mediaType="application/json",
 *              @OA\Schema(
 *                  @OA\Property(
 *                      property="resource_id",
 *                      type="integer",
 *                      description="The ID of the resource"
 *                  ),
 *                  @OA\Property(
 *                      property="user_id",
 *                      type="integer",
 *                      description="The type of the resource"
 *                  ),
 *                  @OA\Property(
 *                      property="start_time",
 *                      type="string",
 *                      description="The ",
 *                      example="2025-02-17 07:14:49"
 *                  ),
 *                  @OA\Property(
 *                       property="end_time",
 *                       type="string",
 *                       description="The description of the resource",
 *                       example="2025-02-19 07:14:49"
 *                   )
 *              )
 *          )
 *      ),
 *
 *     @OA\Response(
 *         response=201,
 *         description="Booking created successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Invalid input"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/api/resources/{id}/bookings",
 *     tags={"Booking"},
 *      summary="Get all bookings for a resource",
 *      description="Returns all bookings for a specific resource",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Resource not found",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="message",
 *                 type="string"
 *              )
 *          )
 *      )
 * )
 *
 * @OA\Delete(
 *     path="/api/bookings/{id}",
 *     tags={"Booking"},
 *      summary="Delete a booking",
 *      description="Deletes a booking by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Booking deleted successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Booking not found",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="message",
 *                 type="string"
 *              )
 *          )
 *      )
 * )
 *
 */
class BookingController extends Controller
{

}
