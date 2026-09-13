<?php

namespace App\Http\Controllers\Api\V1\Exhibitors;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event, Exhibitor, ExhibitorCategory};
use App\Http\Resources\ExhibitorCategoryResource;
use Illuminate\Http\Request;

class ExhibitorCategoryController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index(Request $request)
    {
        return ExhibitorCategoryResource::collection(ExhibitorCategory::query()->get());
    }

    public function show(Request $request)
    {
        return new ExhibitorCategoryResource(Event::findOrFail($request->id));
    }    
}