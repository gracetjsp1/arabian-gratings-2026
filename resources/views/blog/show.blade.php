@extends('layouts.app')

@section('title', $blog->seo_title ?? $blog->title)
@section('meta_description', $blog->seo_description)
@section('meta_keywords', $blog->seo_keywords)

{{-- Open Graph --}}
@section('og_title', $blog->og_title ?? $blog->title)
@section('og_description', $blog->og_description ?? Str::limit(strip_tags($blog->content), 150))
@section('og_image', asset('uploads/blogs/' . ($blog->og_image ?? $blog->image)))

@section('content')

<!-- ========================
 Page Title
=========================== -->
<section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
    <div class="bg-img">
        <img src="{{ asset('assets/images/page-titles/10.jpg') }}" alt="Blog Background">
    </div>
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12">
                <h1 class="pagetitle__heading mb-0"> {{ $blog->title }}</h1>
                 <nav>
                    <ol class="breadcrumb justify-content-center mb-20">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $blog->title }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<!-- ======================
 Blog Single
========================= -->
<section class="blog blog-single pt-5 pb-40">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="blog-item mb-0">

                    <!-- Blog Image -->
                    @if($blog->image)
                        <div class="blog__img">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                 alt="{{ $blog->image_alt ?? $blog->title }}"  class="img-fluid w-100">
                        </div>
                    @endif

                    <!-- Blog Content -->
                    <div class="blog__content">

                        <div class="blog__meta d-flex align-items-center">
                            <span class="blog__meta-date">
                                {{ $blog->created_at->format('M d, Y') }}
                            </span>
                        </div>

                        <h1 class="blog__title">
                            {{ $blog->title }}
                        </h1>

                        <div class="blog__desc">
                            {!! $blog->content !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
