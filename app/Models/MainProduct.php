<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainProduct extends Model
{
    protected $fillable = ['name','slug','main_image','main_alt','banner_image','banner_alt','description','seo_title','seo_keywords','seo_description'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
