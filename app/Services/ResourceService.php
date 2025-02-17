<?php

namespace App\Services;

use App\Repositories\ResourceRepository;

class ResourceService
{
    protected $resourceRepository;

    public function __construct(ResourceRepository $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    public function getAllResources()
    {
        return $this->resourceRepository->getAll();
    }

    public function createResource(array $data)
    {
        return $this->resourceRepository->create($data);
    }
}
