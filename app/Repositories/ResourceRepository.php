<?php

namespace App\Repositories;

use App\Models\Resource;

class ResourceRepository
{
    public function getAll()
    {
        return Resource::all();
    }

    public function create(array $data)
    {
        return Resource::create($data);
    }
}
