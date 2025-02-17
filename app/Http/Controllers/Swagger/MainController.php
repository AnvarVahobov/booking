<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel Swagger OpenApi",
 *      description="L5 Swagger OpenApi description",
 *      @OA\Contact(
 *          email="admin@admin.com"
 *      ),
 *    ),
 * @OA\PathItem(
 *     path="/api/"
 * )
 */
class MainController extends Controller
{
    //
}
