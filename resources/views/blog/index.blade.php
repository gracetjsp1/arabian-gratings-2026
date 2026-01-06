@extends('layouts.app')

@section('title', 'Arabian Gratings | Industrial Gratings Manufacturer')
@section('meta_description', 'Arabian Gratings is a leading manufacturer of industrial gratings.')
@section('meta_keywords', 'FRP gratings, steel gratings, industrial gratings')


@section('content')

<!-- ======================
 Page Title
========================= -->
<section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
    <div class="bg-img">
        <img src="{{ asset('assets/images/page-titles/10.jpg') }}" alt="Blog Background">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="pagetitle__heading mb-0">Blogs</h1>
            </div>
        </div>
    </div>
</section>

<!-- ======================
 Blog Grid
========================= -->
<section class="blog-grid">
    <div class="container">
        <div class="row">

            @forelse($blogs as $blog)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="blog-item">

                        <!-- Blog Image -->
                        <div class="blog__img">
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                     alt="{{ $blog->image_alt ?? $blog->title }}">
                            </a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog__content">

                            <h4 class="blog__title">
                                <a href="{{ route('blog.show', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h4>

                            <span class="blog__meta-date">
                                {{ $blog->created_at->format('M d, Y') }}
                            </span>

                            <p class="blog__desc">
                                {{ Str::limit(strip_tags($blog->content), 140) }}
                            </p>

                            <a href="{{ route('blog.show', $blog->slug) }}"
                               class="btn btn__secondary btn__link">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-warning">
                        No blog posts available.
                    </div>
                </div>
            @endforelse

        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
            <div class="row">
                <div class="col-12 text-center">
                    <nav class="pagination-area">
                        {{ $blogs->links() }}
                    </nav>
                </div>
            </div>
        @endif

    </div>
</section>

@endsection
