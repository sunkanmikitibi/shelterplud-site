<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $property_id)
    {
        $this->validate($request, 
        [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'body' => 'required|min:5|max:2000',
        ]
        );
        $property = Property::findOrfail($property_id);

        $review  = new Review();
        $review->name = $request->name;
        $review->email = $request->email;
        $review->body = $request->body; 
        $review->property()->associate($property);

        $review->save();

        return redirect()->route('propertydetails', [$property]);


    }
}
