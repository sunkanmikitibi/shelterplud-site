<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mover extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the location_from that owns the Mover
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationfrom(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_from', 'id');
    }

     
    public function locationto(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_to', 'id');
    }
}
