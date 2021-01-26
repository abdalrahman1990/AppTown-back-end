<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $fillable = [
        'title', 'tagline', 'icon', 'price', 'description', 'website', 'media1', 'media2',
    ];
}
