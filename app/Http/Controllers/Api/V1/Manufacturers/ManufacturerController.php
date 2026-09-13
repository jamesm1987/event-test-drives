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
        return ManufacturerResource::collection(Event::query()->get());
    }

    public function show(Request $request)
    {
        return new ManufacturerResource(Event::findOrFail($request->id));
    }    
}