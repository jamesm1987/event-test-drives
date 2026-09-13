<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class EventResource extends JsonApiResource
{
    /**
     * The resource's attributes.
     */
    public $attributes = [
        'id',
        'name',
        'slug',
        'location',
        'latitude',
        'longitude',
        'map_image',
        'start_at',
        'end_at',
        'archived_at',
    ];

    /**
     * The resource's relationships.
     */
    public $relationships = [
        // ...
    ];
}
