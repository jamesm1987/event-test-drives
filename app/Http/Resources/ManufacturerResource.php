<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class ManufacturerResource extends JsonApiResource
{
    /**
     * The resource's attributes.
     */
    public $attributes = [
        'id',
        'name',
        'slug',
    ];

    /**
     * The resource's relationships.
     */
    public $relationships = [
        
    ];
}
