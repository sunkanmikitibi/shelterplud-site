<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Propertymanagement;
use App\Models\State;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PropertymController extends Controller
{
    //
    public function index()
    {
        $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
        $states = State::all();
        $vendors = Vendor::all();
        return view('site_pages.propertymanagers_initiate', compact('footerposts', 'states', 'vendors'));
    }

    public function store(Request $request)
    {

        //dd($request->all());
     
        $validated_data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state_id' => 'required',
            'type_of_house' => 'required',
            'vendor_id' => 'required',
            'expected_rent' => 'required',
            'comments' => 'required'
        ]);

        Propertymanagement::create($validated_data);

        return redirect()->route('propertymanagement');
       
    }
}
