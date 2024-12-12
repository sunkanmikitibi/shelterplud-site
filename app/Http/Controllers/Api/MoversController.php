<?php

namespace App\Http\Controllers\Api;

use App\Models\Mover;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MoversResource;

class MoversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movers = Mover::all();
        return MoversResource::collection($movers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $movers = $request->validate(
            [
                'location_to' => 'required',
                'location_from' => 'required',
                'date_of_movement' => 'required',
                'comment' => 'required',
            ]
        );

        $movers = Mover::create($movers);

        return response(
            [
                'data' => $movers,
                'message' => 'success',
            ],
            200,
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
