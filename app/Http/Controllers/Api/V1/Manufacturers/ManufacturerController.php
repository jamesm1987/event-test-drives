<?php

namespace App\Http\Controllers\Api\V1\Manufacturers;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event, Manufacturer};
use App\Http\Resources\ManufacturerResource;
use Illuminate\Http\Request;

class ManufacturerController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index()
    {
        return ManufacturerResource::collection(Manufacturer::query()
            ->orderBy('name')
            ->get()
        );
    }

    public function show(Manufacturer $manufacturer): ManufacturerResource
    {
        return new ManufacturerResource($manufacturer);
    }    
}