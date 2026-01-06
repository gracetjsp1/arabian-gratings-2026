<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
        'main_product_id','sub_category_id','sub_sub_category_id','name','description',
        'accordion_heading1','accordion_description1',
        'accordion_heading2','accordion_description2',
        'accordion_heading3','accordion_description3',
        'accordion_heading4','accordion_description4',
        'accordion_heading5','accordion_description5',
        'accordion_heading6','accordion_description6'
    ];

    public function mainProduct() { return $this->belongsTo(MainProduct::class); }
    public function subCategory() { return $this->belongsTo(SubCategory::class); }
    public function subSubCategory() { return $this->belongsTo(SubSubCategory::class); }
}