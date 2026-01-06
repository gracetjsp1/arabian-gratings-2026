<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainProduct;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\ProductDetail;


class ProductController extends Controller
{
    // List all main products
    public function index()
{
    $mainProducts = MainProduct::orderBy('id', 'asc')->get();
    return view('products.index', compact('mainProducts'));
}

    // Show sub categories of a main product
    public function showSubCategories($mainSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();
        $subCategories = $mainProduct->subCategories;

        return view('products.sub_categories', compact('mainProduct', 'subCategories'));
    }

    // Show sub-sub categories or direct product detail
    public function showSubSubOrDetail($mainSlug, $subSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();

        $subCategory = SubCategory::where('slug', $subSlug)
            ->where('main_product_id', $mainProduct->id)
            ->firstOrFail();

        // If sub-sub categories exist → show them
        if ($subCategory->subSubCategories->count() > 0) {
            $subSubCategories = $subCategory->subSubCategories;

            return view('products.sub_sub_categories', compact(
                'mainProduct',
                'subCategory',
                'subSubCategories'
            ));
        }

        // Otherwise → show product detail
        $productDetail = $subCategory->productDetails()->first();

        return view('products.detail', compact(
            'mainProduct',
            'subCategory',
            'productDetail'
        ));
    }

    // Show product detail for sub-sub category
    public function showDetail($mainSlug, $subSlug, $subSubSlug)
    {
        $mainProduct = MainProduct::where('slug', $mainSlug)->firstOrFail();

        $subSubCategory = SubSubCategory::where('slug', $subSubSlug)
            ->whereHas('subCategory', function ($q) use ($subSlug, $mainProduct) {
                $q->where('slug', $subSlug)
                    ->where('main_product_id', $mainProduct->id);
            })
            ->firstOrFail();

        $subCategory = $subSubCategory->subCategory;
        $productDetail = $subSubCategory->productDetails()->first();

        return view('products.detail', compact(
            'mainProduct',
            'subCategory',
            'productDetail'
        ));
    }
    public function search(Request $request)
    {
        $q = trim($request->q);

        if (!$q) {
            return redirect()->back();
        }

        // Search Sub Categories
        $subCategories = SubCategory::where('name', 'LIKE', "%{$q}%")
            ->with('mainProduct')
            ->get();

        // Search Products (Sub Sub Categories)
        $products = SubSubCategory::where('name', 'LIKE', "%{$q}%")
            ->with('subCategory.mainProduct')
            ->get();

        return view('search.results', compact(
            'q',
            'subCategories',
            'products'
        ));
    }
}
