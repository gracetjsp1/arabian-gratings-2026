<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    protected $fillable = ['sub_category_id','name','slug','image','alt','categories','description','seo_title','seo_keywords','seo_description'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function productDetails()
    {
        return $this->hasOne(ProductDetail::class);
    }
}