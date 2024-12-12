<?php

namespace App\Http\Controllers\site;

use App\Models\Post;
use App\Models\Type;
use App\Models\Mover;
use App\Models\Review;
use App\Models\Feature;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Facility;
use App\Models\Location;
use App\Models\Property;
use Illuminate\View\View;
use App\Models\Categoryblg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ContactFeedback;

class SiteController extends Controller
{
   public function homepage(): View
   {
      $properties = Property::query()->where('featured', '=', 1)->orderBy('created_at', 'desc')->get();
      $locations = Location::latest()->limit(10)->get();
      $posts = Post::query()->where('isActive', '=', 1)->limit(3)->orderBy('created_at', 'desc')->get();
      $top_deals = Property::query()->where('price', '>', 1000000)->orderBy('title', 'asc')->get();

      //dd($top_deals);

      $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
      $propertytypes = Category::all();
      return view('homepage', compact('properties', 'propertytypes', 'locations', 'footerposts', 'posts', 'top_deals'));
   }

   public function userdash()
   {
      $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
      $properties = Property::query()->where('user_id', '=', auth()->user()->id)->get();
      $inactiveproperties = Property::query()->where('isActive', '=', 0)->where('user_id', '=', auth()->user()->id)->get();

      $subscriber = Payment::query('user_id', auth()->user()->id);

      if (!$subscriber) {
         return view('site_pages.pricing');
      } else {
         return view('admin.dashboard', compact('footerposts', 'properties', 'inactiveproperties'));
      }
   }

   public function edge_service()
   {
      $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
      return view('site_pages.edge_services', compact('footerposts'));
   }

   public function parkersmoverspage()
   {
      $locations = Location::all();
      return view('site_pages.parkermovers', compact('locations'));
   }

   public function movers(Request $request)
   {
      //dd($request->all());

      $data = $this->validate($request, [
         'location_from' => 'required',
         'location_to' => 'required',
         'date_of_movement' => 'required',
         'comment' => 'sometimes'
      ]);

      Mover::create($data);

      return redirect()->route('parkers.index');
   }

   public function propertymanager()
   {
      $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
      return view('site_pages.propertymanage', compact('footerposts'));
   }

   public function homeinterior()
   {
      $footerposts = Post::query()->where('isActive', true)->limit(3)->get();
      return view('site_pages.homeinterior', compact('footerposts'));
   }


   public function searchproperty(Request $request)
   {


      $properties = Property::where('featured', 1)->get()->groupBy('location_id');
      $locations = Location::all();
      $propertytypes = Category::all();
      return view('site_pages.search', compact('properties', 'propertytypes', 'locations'));
   }

   public function propertysearch(Request $request)
   {
      $query = Property::query();


      if ($request->has('property_for_rent')) {
         $query->where('type_id', '=', 2);
      }

      $properties = $query->get();

      $footerposts = Post::latest()->limit(3)->get();

      return view('search', compact('properties', 'footerposts'));
   }

   public function subscription_page()
   {
      $footerposts = Post::latest()->limit(3)->get();
      return view('site_pages.pricing', compact('footerposts'));
   }

   public function aboutus(): View
   {
      $footerposts = Post::latest()->limit(3)->get();
      return view('site_pages.aboutpage', compact('footerposts'));
   }

   public function contactus(): View
   {
      $footerposts = Post::latest()->limit(3)->get();
      return view('site_pages.contact', compact('footerposts'));
   }

   public function contactSubmit(Request $req)
   {
      $validatedData = $req->validate(
         [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'email|required',
            'phone' => 'sometimes',
            'message' => 'required',
         ]
      );

      $feedback  = ContactFeedback::created($validatedData);

      return redirect()->back()->with('success', 'Form Submitted Successfully');
   }

   public function search(Request $request, Property $property)
   {

      $footerposts = Post::latest()->limit(3)->get();

      $properties = Property::all();

      $query = Property::query();

      $search_request = $request->input('property');

      if ($request->input('property')) {
         $properties = Property::when($request->property, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%');
         })->get();
      }

      return view('search', compact('properties', 'footerposts'));
   }

   public function search_rent(Request $request, Property $property)
   {

      $footerposts = Post::latest()->limit(3)->get();

      $properties = Property::all();

      $query = Property::query();

      $search_request = $request->input('property');

      if ($request->input('property_for_rent')) {
         $properties = Property::when($request->propertyrent, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%');
         })->get();
      }

      return view('search', compact('properties', 'footerposts'));
   }

   public function loginpage()
   {
      return view('site_pages.login');
   }

   public function registerpage()
   {
      return view('site_pages.register');
   }

   public function addnewproperty()
   {
      $footerposts = Post::latest()->limit(3)->get();
      $locations = Location::all();
      $types = Type::all();
      $categories = Category::all();
      $features = Feature::all();
      $facilities = Facility::all();
      return view('admin.addnew', compact('footerposts', 'facilities', 'locations', 'types', 'features', 'categories'));
   }

   public function property_page()
   {
      $properties = Property::query()->where('featured', '=', 1)->orderBy('created_at', 'desc')->paginate(10);
      return view('site_pages.property', compact('properties'));
   }

   public function blogpage()
   {
      return view('blog.blog');
   }

   public function property_details(Property $property)
   {
      return view('pages.property_details', compact('property'));
   }
}
