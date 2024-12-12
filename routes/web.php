<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertymController;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\HomeInteriorController;



Route::get('/', [SiteController::class, 'homepage']);
Route::get('/aboutus', [SiteController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [SiteController::class, 'contactus'])->name('contactus');
Route::post('/contactus/submit', [SiteController::class, 'contactSubmit'])->name('contactsubmit');

//Search Properties
Route::get('/search_property', [SiteController::class, 'searchproperty'])->name('search');
Route::post('/searchresult', [SiteController::class, 'search'])->name('searchproperty');


Route::get('/property-list', [SiteController::class, 'property_page'])->name('property.list');
Route::get('/property-details/{property:slug}', [SiteController::class, 'property_details'])->name('propertydetails');

//Blog Routes
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{post:slug}', [BlogController::class, 'show'])->name('blog.details');
Route::get('post-category/{categoryblg:slug}', [BlogController::class, 'byCategory'])->name('bycategory');



Route::get('addproperty', [PropertyController::class, 'create'])->middleware(['auth', 'verified'])->name('addproperty');
Route::post('addproperty', [PropertyController::class, 'store'])->middleware(['auth', 'verified'])->name('storeproperty');

Route::get('/location/{location:location_name}', [PropertyController::class, 'bylocation'])->name('location.properties');

Route::post('comments/{post}', [CommentController::class, 'store'])->name('comments.store');
Route::post('review/{property}', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('user-register', [SiteController::class, 'registerpage'])->name('user.register');
Route::get('user-login', [SiteController::class, 'loginpage'])->name('user.login');
Route::get('/user-dashboard', [AdminController::class, 'index'])->name('user.dashboard')->middleware(['auth', 'subscribed']);
Route::get('user-addnew', [SiteController::class, 'addnewproperty'])->name('user.addnew')->middleware(['auth']);
Route::get('user-profile', [AdminController::class, 'user_profile'])->name('user.profile');
Route::get('plans', [SiteController::class, 'subscription_page'])->name('plans');
Route::get('subscription', [PaymentController::class, 'pricing_page'])->name('subscription');

Route::get('edge-services', [SiteController::class, 'edge_service'])->name('edgeservices');

//Payments Routes
Route::get('payment', [PaymentController::class, 'index'])->name('pay.index');
Route::post('payment', [PaymentController::class, 'store'])->name('pay.store');
Route::get('pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/addenquiry/{property}', [PropertyController::class, 'addenquiry'])->name('enquiry.store');


//Parkers and Movers Page
Route::get('parkers-movers', [SiteController::class, 'parkersmoverspage'])->name('parkers.index');
Route::post('parkers-movers', [SiteController::class, 'movers'])->name('parkers.store');

//home-interior
Route::get('homeinterior', [SiteController::class, 'homeinterior'])->name('homeinterior');
Route::get('/homeinterior/initiate', [HomeInteriorController::class, 'create'])->name('homeinterior.create');
Route::post('homeinterior/initiate/create', [HomeInteriorController::class, 'store'])->name('homeinterior.store');

//propertymanager
Route::get('propertymanagement', [SiteController::class, 'propertymanager'])->name('propertymanagement');
Route::get('/propertymanagement/initiate', [PropertymController::class, 'index'])->name('propertymanager.create');
Route::post('/propertymanagement/initiate/create', [PropertymController::class, 'store'])->name('propertymanager.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('linkstorage', function () {
    Artisan::call('storage:link');
    return "Storage Linked Successfully";
});

Route::get('clear-config', function () {
    Artisan::call('config:clear');
    return "Config Cleared Successfully";
});

Route::get('cache-config', function () {
    Artisan::call('config:cache');
    return "Config Cache Successfully";
});

require __DIR__ . '/auth.php';
