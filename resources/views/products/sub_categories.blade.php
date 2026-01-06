@extends('layouts.app')

@section('title', $mainProduct->seo_title ?? $mainProduct->name . ' | Arabian Gratings')

@section('meta_description', $mainProduct->seo_description ?? Str::limit(strip_tags($mainProduct->description), 160))

@section('meta_keywords', $mainProduct->seo_keywords ?? $mainProduct->name)

@section('content')

    {{-- ========================
   MAIN PRODUCT BANNER
======================== --}}

    @if ($mainProduct->banner_image)
        <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 text-center">

            <!-- Background Image -->
            <div class="bg-img">
                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}"
                    alt="{{ $mainProduct->banner_alt ?? $mainProduct->name }}">
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">

                        <!-- Page Heading -->
                        <h1 class="pagetitle__heading mb-3">
                            {{ $mainProduct->name }}
                        </h1>

                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <div class="page-breadcrumb">

                                <a href="{{ url('/') }}">Home</a>
                                <span>&gt;</span>

                                <a href="{{ route('products.index') }}">
                                    Products
                                </a>
                                <span>&gt;</span>

                                @isset($subCategory)
                                    <span class="current">{{ $subCategory->name }}</span>
                                @else
                                    <span class="current">{{ $mainProduct->name }}</span>
                                @endisset

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

                @if ($subCategories->count() > 0)

                    @foreach ($subCategories as $sub)
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="portfolio-item">

                                <!-- Sub Category Image -->
                                <div class="portfolio__img">
                                    <a href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $sub->slug]) }}">
                                        @if ($sub->image)
                                            <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $sub->slug . '/' . $sub->image) }}"
                                                alt="{{ $sub->alt ?? $sub->name }}">
                                        @else
                                            <img src="{{ asset('assets/images/no-image.png') }}" alt="No image">
                                        @endif
                                    </a>
                                </div>

                                <!-- Sub Category Content -->
                                <div class="portfolio__content">

                                    <h4 class="portfolio__title">
                                        <a
                                            href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $sub->slug]) }}">
                                            {{ $sub->name }}
                                        </a>
                                    </h4>

                                    <p class="portfolio-para">
                                        <a href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $sub->slug]) }}"
                                            class="portfolio__desc">
                                            {{ Str::limit(strip_tags($sub->description), 130) }}
                                        </a>
                                    </p>

                                    <a href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $sub->slug]) }}"
                                        class="btn btn__loadMore">
                                        <span>Explore now</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    {{-- ✅ NO PRODUCT MESSAGE --}}
                    <div class="col-12 text-center">
                        <div class="alert alert-warning mt-4">
                            ⚠️ Products are coming soon.
                            <br>
                            <a href="{{ route('products.index') }}" class="btn btn__primary mt-2">
                                Browse other products
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>



    {{-- List Sub-Categories --}}
    {{-- <div class="sub-categories">
    @foreach ($subCategories as $sub)
        <div class="sub-category-card" style="border:1px solid #ddd; padding:15px; margin-bottom:15px;">
          
            @if ($sub->image)
                <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $sub->slug . '/' . $sub->image) }}" 
                     alt="{{ $sub->alt ?? $sub->name }}" 
                     style="width:200px; height:auto; display:block; margin-bottom:10px;">
            @endif

            <h3>
                <a href="{{ route('products.subsub_or_detail', [$mainProduct->slug, $sub->slug]) }}">
                    {{ $sub->name }}
                </a>
            </h3>

            <p>{{ $sub->description }}</p>
        </div>
    @endforeach 
</div> --}}

@endsection
