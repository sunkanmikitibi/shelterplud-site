<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyManagerResource;
use App\Models\Propertymanagement;
use Illuminate\Http\Request;

class PropertyManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertymanagers = Propertymanagement::all();
        return  PropertyManagerResource::collection($propertymanagers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $propertymanager =  $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'phone' => 'required',
                'state_id' => 'required',
                'type_of_house' => 'required',
                'vendor_id' => 'required',
                'expected_rent' => 'required',
                'comments' => 'sometimes',
            ]
            );

           $propertymgr =  Propertymanagement::create($propertymanager);
            return response(
                [
                    'data' => $propertymgr,
                    'message' => 'success'
                ], 200
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
