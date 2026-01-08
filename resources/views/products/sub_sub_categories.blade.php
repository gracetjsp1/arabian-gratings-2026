@extends('layouts.app')

@section('title', $subCategory->seo_title ?? $subCategory->name . ' | ' . config('app.name'))
@section('meta_keywords', $subCategory->seo_keywords ?? $subCategory->name)
@section('meta_description', $subCategory->seo_description ?? 'Explore ' . $subCategory->name . ' products from ' .
    config('app.name') . '. High quality and durable solutions.')


@section('content')
    {{-- ========================
   SUB SUB CATEGORY BANNER
======================== --}}

    @if ($mainProduct->banner_image)
        <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 text-center">

            <div class="bg-img">
                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}"
                    alt="{{ isset($subSubCategory)
                        ? $subSubCategory->seo_title ?? $subSubCategory->name
                        : $subCategory->seo_title ?? $subCategory->name }}">
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">

                        <!-- Page Heading -->
                        <h1 class="pagetitle__heading mb-3">
                            {{ isset($subSubCategory) ? $subSubCategory->name : $subCategory->name }}
                        </h1>

                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <div class="page-breadcrumb">

                                <a href="{{ url('/') }}">Home</a>
                                <span>&gt;</span>

                                <a href="{{ route('products.index') }}">Products</a>
                                <span>&gt;</span>

                                <!-- Main Product -->
                                <a href="{{ route('products.subcategories', $mainProduct->slug) }}">
                                    {{ $mainProduct->name }}
                                </a>
                                <span>&gt;</span>

                                <!-- Sub Category -->
                                @if (isset($subSubCategory))
                                    <a
                                        href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $subCategory->slug]) }}">
                                        {{ $subCategory->name }}
                                    </a>
                                    <span>&gt;</span>
                                    <span class="current">{{ $subSubCategory->name }}</span>
                                @else
                                    <span class="current">{{ $subCategory->name }}</span>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    @endif
    <section class="portfolio-standard">
    <div class="container pl-lg-5 pr-lg-5">
        <div class="row">

            @foreach ($subSubCategories as $subSub)
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">

                        <!-- Sub Sub Category Image -->
                        <div class="portfolio__img">
                            <a href="{{ route('products.detail', [
                                $subCategory->mainProduct->slug,
                                $subCategory->slug,
                                $subSub->slug
                            ]) }}">

                                @if($subSub->image)
                                    <img src="{{ asset(
                                        'uploads/products/' .
                                        $subCategory->mainProduct->slug . '/' .
                                        $subCategory->slug . '/' .
                                        $subSub->slug . '/' .
                                        $subSub->image
                                    ) }}"
                                    alt="{{ $subSub->alt ?? $subSub->name }}">
                                @else
                                    <img src="{{ asset('assets/images/no-image.png') }}" alt="No image">
                                @endif

                            </a>
                        </div>

                        <!-- Sub Sub Category Content -->
                        <div class="portfolio__content">

                            <h4 class="portfolio__title">
                                <a href="{{ route('products.detail', [
                                    $subCategory->mainProduct->slug,
                                    $subCategory->slug,
                                    $subSub->slug
                                ]) }}">
                                   {{ \Illuminate\Support\Str::limit($subSub->name, 28) }}
                                </a>
                            </h4>

                            <p class="portfolio-para">
                                <a href="{{ route('products.detail', [
                                    $subCategory->mainProduct->slug,
                                    $subCategory->slug,
                                    $subSub->slug
                                ]) }}"
                                   class="portfolio__desc">
                                    {{ Str::limit(strip_tags($subSub->description), 140) }}
                                </a>
                            </p>

                            <a href="{{ route('products.detail', [
                                $subCategory->mainProduct->slug,
                                $subCategory->slug,
                                $subSub->slug
                            ]) }}"
                               class="btn btn__loadMore">
                                <span>Explore now</span>
                                <i class="icon-arrow-right"></i>
                            </a>

                        </div><!-- /.portfolio-content -->

                    </div><!-- /.portfolio-item -->
                </div><!-- /.col -->
            @endforeach

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

{{-- 
    <h1>Sub-Sub Categories of {{ $subCategory->name }}</h1>
    <ul>
        @foreach ($subSubCategories as $subSub)
        @if($subSub->image)
    <img src="{{ asset(
        'uploads/products/' .
        $subCategory->mainProduct->slug . '/' .
        $subCategory->slug . '/' .
        $subSub->slug . '/' .
        $subSub->image
    ) }}"
    alt="{{ $subSub->alt ?? $subSub->name }}">
@else
    <img src="{{ asset('assets/images/no-image.png') }}" alt="No image">
@endif
            <li>
                <a
                    href="{{ route('products.detail', [$subCategory->mainProduct->slug, $subCategory->slug, $subSub->slug]) }}">{{ $subSub->name }}</a>
            </li>
        @endforeach
    </ul> --}}
@endsection
