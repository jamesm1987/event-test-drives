<?php

namespace App\Http\Controllers\Api\V1\Exhibitors;

use App\Http\Controllers\Controller as BaseController;
use App\Models\{Event, Exhibitor, ExhibitorCategory};
use App\Http\Resources\ExhibitorCategoryResource;
use App\Http\Requests\ExhibitorCategoryRequest;
use App\QueryFilters\IncludeExhibitors;
use Illuminate\Support\Facades\Pipeline;
use Illuminate\Http\Request;

class ExhibitorCategoryController extends BaseController {
     
    /*
	 * @return \Illuminate\Http\JsonResponse
	*/

    public function index(Request $request)
    {
        $categories = Pipeline::send(ExhibitorCategory::query())
        ->through([
            new IncludeExhibitors($request->boolean('exhibitors')),
        ])
        ->thenReturn()
        ->get();

        return ExhibitorCategoryResource::collection($categories);
        
    }

    public function show(Request $request)
    {
        return new ExhibitorCategoryResource(Event::findOrFail($request->id));
    }    
}