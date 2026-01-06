<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['main_product_id','name','slug','image','alt','categories','description','seo_title','seo_keywords','seo_description'];

    public function mainProduct()
    {
        return $this->belongsTo(MainProduct::class);
    }

    public function subSubCategories()
    {
        return $this->hasMany(SubSubCategory::class);
    }

    public function productDetails()
    {
        return $this->hasOne(ProductDetail::class);
    }
}
