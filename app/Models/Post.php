<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function postImage()
    {
        if(str_starts_with($this->post_image, 'http')) {
            return $this->post_image;
        }

        return '/app/public/'.$this->post_image;
    }

    public function apiPostImage()
    {
        if(str_starts_with($this->post_image, 'http')) {
            return $this->post_image;
        }

        return asset('app/public/').'/'.$this->post_image;
    }

     
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
 
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categoryblg::class, 'categoryblg_post', 'post_id', 'categoryblg_id');
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 30, '...');
    }

    public function getFormattedDate()
    {
        return $this->published_at->format('M, jS Y');
    }

     
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
