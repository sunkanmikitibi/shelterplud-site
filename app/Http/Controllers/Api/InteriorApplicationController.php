<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\InteriorApplicationRequest;
use App\Http\Resources\InteriorManagerResource;
use App\Models\Interiorapplication;
use Illuminate\Http\Request;

class InteriorApplicationController extends Controller
{

    public function index()
    {
        $applications = Interiorapplication::all();
        return InteriorManagerResource::collection($applications);
    }


    public function store(InteriorApplicationRequest $request)
    {
        $request->validated();

        $interiorData = [
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'location_id' => $request->location_id,
            'city' => $request->city,
            'budget' => $request->budget,
            'vendor_id' =>  $request->vendor_id,
            'type_of_apartment' => $request->type_of_apartment,
            'possession_timeline' => $request->possession_timeline,
            'scope_of_work' => $request->scope_of_work,
            'comments' => $request->comments,
        ];

        $interior_application = Interiorapplication::create($interiorData);

        return response(

            [
                "messages" => "Interioar application created successfully",
                'data' => $interior_application,
                'message' => 'success'
            ],
            200,
        );
    }
}
