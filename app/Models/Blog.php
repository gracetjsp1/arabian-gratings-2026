<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'image_alt',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'og_title',
        'og_description',
        'og_image',
        'is_active'
    ];
}
