<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacilityProperty extends Model
{
    use HasFactory;

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
