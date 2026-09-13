<?php

namespace App\Http\Controllers\Api\V1\Events;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event};
use App\Http\Resources\EventResource;
use Illuminate\Http\Request;

class EventController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index()
    {
        return EventResource::collection(Event::query()->get());
    }

    public function show(Request $request)
    {
        return new EventResource(Event::findOrFail($request->id));
    }    
}