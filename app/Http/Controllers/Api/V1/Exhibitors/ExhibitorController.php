<?php

namespace App\Http\Controllers\Api\V1\Exhibitors;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event, Exhibitor};
use App\Http\Resources\ExhibitorResource;
use Illuminate\Http\Request;

class ExhibitorController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index()
    {
        return ExhibitorResource::collection(Event::query()->get());
    }

    public function show(Request $request)
    {
        return new ExhibitorResource(Event::findOrFail($request->id));
    }    
}