<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\House\HouseAction;
use App\Actions\House\HouseFindAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\House\HouseResource;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(HouseAction $action)
    {
         $houses = $action->handle();

         return HouseResource::collection($houses);
    }
    public function find(string $slug, HouseFindAction $action)
    {

        $house = $action->handle($slug);

        if(!$house) {
            return response()->json([
                'message' => 'House not found'
            ]);
        }

        $house->load(['gallery', 'localisation']);

        return $house;
    }
}
