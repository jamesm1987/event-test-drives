<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\ExhibitorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ExhibitorCategoryResource extends JsonResource
{
    
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'exhibitors' => ExhibitorResource::collection($this->whenLoaded('exhibitors'))
        ];
    }
}
