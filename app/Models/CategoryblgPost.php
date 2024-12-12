<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CategoryblgPost extends Model
{
    use HasFactory;

    /**
     * The posts that belong to the CategoryblgPost
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'categoryblg_post_table', 'post_id', 'categoryblg_id');
    }
}
