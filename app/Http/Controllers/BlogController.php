<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Blog Listing Page
     */
    public function index()
    {
        $blogs = Blog::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('blog.index', compact('blogs'));
    }

    /**
     * Single Blog Page
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        return view('blog.show', compact('blog'));
    }
}
