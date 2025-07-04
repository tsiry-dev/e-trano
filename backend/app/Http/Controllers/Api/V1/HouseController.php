<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\House\HouseAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\House\HouseResource;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(HouseAction $action)
    {
         $houses = $action->handle();

         return HouseResource::collection($houses);
    }
}
