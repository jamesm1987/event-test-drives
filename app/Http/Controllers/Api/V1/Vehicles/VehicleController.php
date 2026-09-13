<?php

namespace App\Http\Controllers\Api\V1\Vehicles;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event, Vehicle};
use App\Http\Resources\VehicleResource;
use Illuminate\Http\Request;

class VehicleController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index()
    {
        return VehicleResource::collection(Event::query()->get());
    }

    public function show(Request $request)
    {
        return new VehicleResource(Event::findOrFail($request->id));
    }    
}