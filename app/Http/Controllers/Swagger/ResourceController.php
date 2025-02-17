<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/resources",
 *     tags={"Resource"},
 *     summary="Create a new resource",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     property="name",
 *                     type="string",
 *                     description="The name of the resource"
 *                 ),
 *                 @OA\Property(
 *                     property="type",
 *                     type="string",
 *                     description="The type of the resource"
 *                 ),
 *                 @OA\Property(
 *                     property="description",
 *                     type="string",
 *                     description="The description of the resource",
 *                     nullable=true
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Resource created successfully"
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Invalid input"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/api/resources",
 *     tags={"Resource"},
 *     summary="Get all resources",
 *     @OA\Response(
 *         response=200,
 *         description="List of resources"
 *     )
 * )
 *
 */
class ResourceController extends Controller
{

}
