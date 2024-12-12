<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Payment;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth', 'subscribed']);
    }

    public function index()
    {

        $footerposts = Post::query()
            ->where('isActive', true)
            ->limit(3)->get();
        $properties = Property::query()
            ->where('user_id', '=', auth()->user()->id)->get();
        $inactiveproperties = Property::query()
            ->where('isActive', '=', 0)
            ->where('user_id', '=', auth()->user()->id)
            ->get();

        //dd($properties);
        $subscriber = Payment::query('user_id', auth()->user()->id);

        //$properties = Property::query()->where(Auth::user()->id, '=', 'user_id')->where('isActive', true)->get();
        $activeproperties = Property::query()->where('isActive', true)->get();
        //dd($properties);
        return view('admin.dashboard', compact('properties', 'inactiveproperties', 'footerposts', 'activeproperties'));
    }

    public function user_profile()
    {
        $footerposts = Post::latest()->limit(3)->get();
        return view('admin.profile', compact('footerposts'));
    }

    public function login()
    {
        return view('admin.login');
    }
}
