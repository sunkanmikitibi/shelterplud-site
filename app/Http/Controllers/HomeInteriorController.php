<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Vendor;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Interiorapplication;

class HomeInteriorController extends Controller
{
    //
    public function create()
    {
        $locations = Location::all();
        $vendors = Vendor::all();
        $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
        return view('site_pages.homeinterior_initiate', compact('footerposts', 'locations', 'vendors'));
    }

    public function store(Request $request)
    {

        //dd($request->all());
            
        $valivated_data = $this->validate($request, [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'location_id' => 'required',
            'city' => 'required',
            'budget' => 'required',
            'vendor_id' => 'required',
            'type_of_apartment' => 'required',
            'possession_timeline' => 'required',
            'scope_of_work' => 'required',
            'comments' => 'sometimes'
        ]);

        Interiorapplication::create($valivated_data);
 

        return redirect()->route('homeinterior');
        

    }
}
