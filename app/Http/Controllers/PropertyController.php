<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Type;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Facility;
use App\Models\Location;
use App\Models\Property;
use Illuminate\View\View;
use App\Models\Propertyform;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PropertyController extends Controller
{
    //
    public function index(): View
    {
        return view('site_pages.property');
    }

    public function create()
    {
        $facilities = Facility::all();
        $features = Feature::all();
        $types = Type::all();
        $locations = Location::all();
        $categories = Category::all();
        return view('site_pages.addproperty', compact('locations', 'categories', 'types', 'features', 'facilities'));
    }

    public function addenquiry(Request $request, $property_id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'sometimes',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $property = Property::findOrfail($property_id);

        $enquiry = new Propertyform();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->message = $request->message;

        $enquiry->property()->associate($property);

        $enquiry->save();

        return redirect()->route('propertydetails', [$property]);
    }

    public function bylocation(Location $location)
    {
        $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
        return view('properties.bylocations', compact('location', 'footerposts'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'property_address' => 'required',
            'city' => 'required',
            'location_id' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'size' => 'required',
            'price' => 'required',
            'no_of_bedrooms' => 'required',
            'no_of_bathrooms' => 'required',
            'company_id' => 'required',
            'description' => 'required',
        ]);


        $property = new Property();

        $property->title = $request->title;
        $property->property_address = $request->property_address;
        $property->city = $request->city;
        $property->location_id = $request->location_id;
        $property->type_id = $request->type_id;
        $property->category_id = $request->category_id;
        $property->size = $request->size;
        $property->user_id = auth()->user()->id;
        $property->price = $request->price;
        $property->company_id = $request->company_id;
        $property->no_of_bedrooms = $request->no_of_bedrooms;
        $property->no_of_bathrooms = $request->no_of_bathrooms;
        $property->company_id = $request->company_id;
        $property->featured = $request->featured;
        $property->description = $request->description;

        //upload property picture

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('app/public/coverimages/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $property->cover_image = 'coverimages/' . $filename;
        }

        $property->addMediaFromRequest('gallery1')->toMediaCollection();


        $property->save();

        return redirect()->route('property.list');
    }
}
