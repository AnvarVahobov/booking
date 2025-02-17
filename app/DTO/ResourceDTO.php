<?php

namespace App\DTO;

class ResourceDTO
{
    public function __construct(
        public string $name,
        public string $type,
        public string $description
    )
    {
    }

    public function toArray(): array
    {
        return[
            'name' => $this->name,
            'type' => $this->type,
            'description' => $this->description
        ];
    }
}
