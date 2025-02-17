<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResourceRequest;
use App\Http\Requests\UpdateResourceRequest;
use App\Http\Resources\ResourceResource;
use App\Services\ResourceService;

class ResourceController extends Controller
{
    protected $resourceService;

    public function __construct(ResourceService $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function index()
    {
        return ResourceResource::collection($this->resourceService->getAllResources());
    }

    public function store(StoreResourceRequest $request)
    {
        $data = $request->toDto()->toArray();

        return new ResourceResource($this->resourceService->createResource($data));
    }
}
