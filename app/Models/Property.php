<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    protected $appends = [
        'reviews',
        'enquiries'
    ];

    public function getReviewsAttribute()
    {
        return $this->reviews()->count();
    }

    public function getEnquiriesAttribute()
    {
        return $this->enquiries()->count();
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'feature_properties', 'property_id', 'feature_id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }


    public function enquiries(): HasMany
    {
        return $this->hasMany(Propertyform::class);
    }



    public function shortBody()
    {
        return Str::words(strip_tags($this->description), 30, '...');
    }

    public function propertyImage()
    {
        if (str_starts_with($this->cover_image, 'http')) {
            return $this->cover_image;
        }

        return '/storage/' . $this->cover_image;
    }



    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class, 'facility_properties', 'property_id', 'facility_id');
    }
}
