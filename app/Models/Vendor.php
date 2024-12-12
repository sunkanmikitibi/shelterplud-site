<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function interiorapplications(): HasMany
    {
        return $this->hasMany(Interiorapplication::class);
    }

/**
 * Get the service that owns the Vendor
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function service(): BelongsTo
{
    return $this->belongsTo(Service::class);
}
   
    public function propertymanagements(): HasMany
    {
        return $this->hasMany(Propertymanagement::class);
    }
}
