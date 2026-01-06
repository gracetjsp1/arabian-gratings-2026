<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
// Static pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
// Contact page (GET)
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact form submission (POST)
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// Products hierarchy handled by your existing ProductController
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{mainSlug}', [ProductController::class, 'showSubCategories'])->name('products.subcategories');
Route::get('/products/{mainSlug}/{subSlug}', [ProductController::class, 'showSubSubOrDetail'])->name('products.subsub_or_detail');
Route::get('/products/{mainSlug}/{subSlug}/{subSubSlug}', [ProductController::class, 'showDetail'])->name('products.detail');

//Blog pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/search', [ProductController::class, 'search'])->name('search');