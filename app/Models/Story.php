<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model

{
    protected $fillable = [
        'category_title', 'title', 'description', 'content', 'featured_image', 'icon_image', 'story_image', 'featured',
    ];
}
