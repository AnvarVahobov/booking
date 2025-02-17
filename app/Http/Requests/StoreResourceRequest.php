<?php

namespace App\Http\Requests;

use App\DTO\ResourceDTO;
use Illuminate\Foundation\Http\FormRequest;

class StoreResourceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'nullable|string',
        ];
    }

    public function toDto():ResourceDTO
    {
        return new ResourceDTO(
          name: $this->name,
          type: $this->type,
          description: $this->description
        );
    }
}
