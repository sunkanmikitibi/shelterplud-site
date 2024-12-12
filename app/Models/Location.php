<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    /**
     * Get all of the comments for the Location
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movers(): HasMany
    {
        return $this->hasMany(Mover::class);
    }
}
