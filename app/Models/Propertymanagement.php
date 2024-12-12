<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propertymanagement extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the Vendor that owns the Propertymanagement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
