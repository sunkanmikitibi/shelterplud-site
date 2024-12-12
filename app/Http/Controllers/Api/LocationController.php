<?php

namespace App\Http\Controllers\Api;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResource;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return LocationResource::collection($locations);
    }
}
