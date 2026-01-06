@extends('layouts.app')

@section('title', 'Search Results for ' . $q)

@section('content')

    <!-- ========================
                     PAGE TITLE
                =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img">
            <img src="{{ asset('assets/images/sliders/gratings-banner.webp') }}" alt="background">
        </div>
        <div class="container">
            <h1 class="pagetitle__heading mb-3">
                Search Results for "{{ $q }}"
            </h1>

            <div class="page-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>&gt;</span>
                <span class="current">Search Result</span>
            </div>
        </div>
    </section>

    <!-- ========================
                     SEARCH RESULTS GRID
                =========================== -->
    <section class="portfolio-standard">
        <div class="container pl-lg-5 pr-lg-5">
            <div class="row">

                {{-- =====================
                SUB CATEGORIES
            ====================== --}}
                @foreach ($subCategories as $sub)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio-item">

                            <div class="portfolio__img">
                                <a href="{{ route('products.subsub_or_detail', [$sub->mainProduct->slug, $sub->slug]) }}">
                                    <a
                                        href="{{ route('products.subsub_or_detail', [$sub->mainProduct->slug, $sub->slug]) }}">
                                        @if ($sub->image)
                                            <img src="{{ asset('uploads/products/' . $sub->mainProduct->slug . '/' . $sub->slug . '/' . $sub->image) }}"
                                                alt="{{ $sub->alt ?? $sub->name }}">
                                        @else
                                            <img src="{{ asset('assets/images/no-image.png') }}" alt="No image">
                                        @endif
                                    </a>
                                </a>
                            </div>

                            <div class="portfolio__content">
                                <h4 class="portfolio__title">
                                    <a
                                        href="{{ route('products.subsub_or_detail', [$sub->mainProduct->slug, $sub->slug]) }}">
                                        {{ $sub->name }}
                                    </a>
                                </h4>

                                <p class="portfolio-para">
                                    {{ Str::limit(strip_tags($sub->description), 140) }}
                                </p>

                                <a href="{{ route('products.subsub_or_detail', [$sub->mainProduct->slug, $sub->slug]) }}"
                                    class="btn btn__loadMore">
                                    <span>Explore now</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach


                {{-- =====================
                FINAL PRODUCTS
            ====================== --}}
                @foreach ($products as $item)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio-item">

                            <div class="portfolio__img">
                                <a
                                    href="{{ route('products.detail', [$item->subCategory->mainProduct->slug, $item->subCategory->slug, $item->slug]) }}">
                                    @if ($item->image)
                                        <img src="{{ asset(
                                            'uploads/products/' .
                                                $item->subCategory->mainProduct->slug .
                                                '/' .
                                                $item->subCategory->slug .
                                                '/' .
                                                $item->slug .
                                                '/' .
                                                $item->image,
                                        ) }}"
                                            alt="{{ $item->alt ?? $item->name }}">
                                    @else
                                        <img src="{{ asset('assets/images/no-image.png') }}" alt="No image">
                                    @endif
                                </a>
                            </div>

                            <div class="portfolio__content">
                                <h4 class="portfolio__title">
                                    <a
                                        href="{{ route('products.detail', [$item->subCategory->mainProduct->slug, $item->subCategory->slug, $item->slug]) }}">
                                        {{ $item->name }}
                                    </a>
                                </h4>

                                <p class="portfolio-para">
                                    {{ Str::limit(strip_tags($item->description), 140) }}
                                </p>

                                <a href="{{ route('products.detail', [$item->subCategory->mainProduct->slug, $item->subCategory->slug, $item->slug]) }}"
                                    class="btn btn__loadMore">
                                    <span>View Product</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach


                {{-- =====================
                NO RESULTS
            ====================== --}}
                @if ($subCategories->isEmpty() && $products->isEmpty())
                    <div class="col-12 text-center mt-40">
                        <h4>No results found for "{{ $q }}"</h4>
                        <p>Please try a different keyword.</p>
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection
