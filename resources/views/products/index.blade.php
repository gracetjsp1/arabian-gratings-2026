@extends('layouts.app')

@section('title', 'Arabian Gratings | Industrial Gratings Manufacturer')
@section('meta_description', 'Arabian Gratings is a leading manufacturer of industrial gratings.')
@section('meta_keywords', 'FRP gratings, steel gratings, industrial gratings')

@section('content')

    <!-- ========================
           Page Title (MAIN PRODUCT BANNER)
        =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img">
            <img src="{{ asset('assets/images/sliders/gratings-banner.webp') }}" alt="background">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">

                    <h1 class="pagetitle__heading mb-3">Our Products</h1>

                    <!-- Navigation Buttons -->
                    <div class="d-flex justify-content-center gap-3">
                        <div class="page-breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <span>&gt;</span>
                            <span class="current">Products</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ===========================
           Portfolio (Dynamic Main Products)
        ============================= -->
    <!-- ===========================
           Portfolio (Dynamic Main Products)
        ============================= -->
    <section class="portfolio-standard">
        <div class="container pl-lg-5 pr-lg-5">
            <div class="row ">

                @foreach ($mainProducts as $main)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="portfolio-item">

                            <!-- Product Image -->
                            <div class="portfolio__img">
                                <a href="{{ route('products.subcategories', $main->slug) }}">
                                    <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->main_image) }}"
                                        alt="{{ $main->main_alt ?? $main->name }}">
                                </a>
                            </div>

                            <!-- Product Content -->
                            <div class="portfolio__content">
                                <h4 class="portfolio__title">
                                    <a href="{{ route('products.subcategories', $main->slug) }}">
                                        {{ $main->name }}
                                    </a>
                                </h4>

                                <p class="portfolio-para">
                                    <a href="{{ route('products.subcategories', $main->slug) }}" class="portfolio__desc">
                                        {{ Str::limit(strip_tags($main->description), 140) }}
                                    </a>
                                </p>

                                <a href="{{ route('products.subcategories', $main->slug) }}" class="btn btn__loadMore">
                                    <span>Explore now</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection


{{-- @extends('layouts.app')
@section('title', 'Products - Arabian Gratings')

@section('content')
    <h1>Main Products</h1>

    @foreach ($mainProducts as $main)
        <div class="product-box">
            <a href="{{ route('products.subcategories', $main->slug) }}">

               
                @if ($main->main_image)
                   <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->main_image) }}"
     alt="{{ $main->main_alt ?? $main->name }}">
                @endif

                <h3>{{ $main->name }}</h3>
            </a>

       
            @if ($main->description)
                <p>{{ Str::limit(strip_tags($main->description), 150) }}</p>
            @endif

            
            @if ($main->banner_image)
                <div class="banner-preview">
                    <img src="{{ asset('uploads/products/' . $main->slug . '/' . $main->banner_image) }}"
                        alt="{{ $main->banner_alt ?? $main->name }}">
                </div>
            @endif
        </div>
    @endforeach

@endsection --}}
