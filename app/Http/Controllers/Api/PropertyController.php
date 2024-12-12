<?php

namespace App\Http\Controllers\Api;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Http\Resources\PropertyResource;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::query()
        ->where('featured', '=', 1)
        ->orderBy('created_at', 'desc')
        ->with(['user', 'type'])
        ->get();

        /*return response([
            'properties' =>  $properties,
        ]);
        */

        return PropertyResource::collection($properties);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        $request->validated();

        $user = auth()->user()->id;

        $propertyData =
            [
                'title' => $request->title,
                'property_address' => $request->property_address,
                'city' => $request->city,
                'location_id' => $request->location_id,
                'type_id' => $request->type_id,
                'category_id' => $request->category_id,
                'size' => $request->size,
                'price' => $request->price,
                'user_id' => $user,
                'company_id' => $request->company_id,
                'no_of_bedrooms' => $request->no_of_bedrooms,
                'no_of_bathrooms' => $request->no_of_bathrooms,
                'featured' => $request->featured,
                'cover_image' => $request->cover_image ?? '',
                'description' => $request->description ?? '',
            ];

            $property = Property::create($propertyData);

            return response(
                [
                    'message' => 'success'
                ], 200
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property, $id)
    {
        $property = Property::find($id);

        return response(
            [
                'property' => $property,
            ]
        );

        //return PropertyResource::make($property);
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
