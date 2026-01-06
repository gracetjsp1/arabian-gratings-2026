<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainProduct;

class PageController extends Controller
{
    // Home page
    public function home()
    {
        // Optional: show some main products on home
        $mainProducts = MainProduct::all();
        return view('home', compact('mainProducts'));
    }

    // Services page
    public function services()
    {
        return view('services');
    }

    // About page
    public function about()
    {
        return view('about');
    }

    // Contact page
    public function contact()
    {
        return view('contact');
    }
}