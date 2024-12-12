<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{

   public function propertysearch(Request $request, Property $property)
   {
      $properties = Property::all();

      $query = Property::query();

      $search_request = $request->input('property');

      if ($request->input('property')) {
         $properties = Property::when($request->property, function ($query, $search) {
            $query->where('featured', true)->where('title', 'like', '%' . $search . '%');
         })->get();
      }

      return view('search', compact('properties'));
   }
}
