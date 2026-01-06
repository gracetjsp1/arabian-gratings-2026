@extends('layouts.app')

@php
    $seo_title = 'Arabian Gratings';
    $seo_description = 'Leading manufacturer of industrial gratings.';
    $seo_keywords = 'gratings, FRP gratings, steel gratings';

    if (isset($productDetail)) {
        // Check if product has sub-sub category
        if ($productDetail->subSubCategory) {
            $subSub = $productDetail->subSubCategory;
            $seo_title = $subSub->seo_title ?? $subSub->name . ' | Arabian Gratings';
            $seo_description = $subSub->seo_description ?? Str::limit(strip_tags($subSub->description), 160);
            $seo_keywords = $subSub->seo_keywords ?? $subSub->name;
        } elseif ($productDetail->subCategory) {
            $subCat = $productDetail->subCategory;
            $seo_title = $subCat->seo_title ?? $subCat->name . ' | Arabian Gratings';
            $seo_description = $subCat->seo_description ?? Str::limit(strip_tags($subCat->description), 160);
            $seo_keywords = $subCat->seo_keywords ?? $subCat->name;
        } else {
            // fallback to main product
            $main = $productDetail->mainProduct;
            $seo_title = $main->seo_title ?? $main->name . ' | Arabian Gratings';
            $seo_description = $main->seo_description ?? Str::limit(strip_tags($main->description), 160);
            $seo_keywords = $main->seo_keywords ?? $main->name;
        }
    }
@endphp

@section('title', $seo_title)
@section('meta_description', $seo_description)
@section('meta_keywords', $seo_keywords)

@section('content')

    {{-- Main Product Banner --}}
    {{-- ========================
   MAIN PRODUCT BANNER
======================== --}}
    @if ($mainProduct)
        <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 text-center">

            @if ($mainProduct->banner_image)
                <div class="bg-img">
                    <img src="{{ asset('uploads/products/' . $mainProduct->slug . '/' . $mainProduct->banner_image) }}"
                        alt="{{ $mainProduct->banner_alt ?? $mainProduct->name }}">
                </div>
            @endif

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">

                        <!-- Page Heading -->
                        <h1 class="pagetitle__heading mb-3">
                            @if (isset($productDetail) && $productDetail->subSubCategory)
                                {{ $productDetail->subSubCategory->name }}
                            @elseif(isset($productDetail) && $productDetail->subCategory)
                                {{ $productDetail->subCategory->name }}
                            @elseif(isset($subCategory))
                                {{ $subCategory->name }}
                            @else
                                {{ $mainProduct->name }}
                            @endif
                        </h1>

                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <div class="page-breadcrumb">

                                <a href="{{ url('/') }}">Home</a>
                                <span>&gt;</span>

                                <a href="{{ route('products.index') }}">Products</a>
                                <span>&gt;</span>

                                <a href="{{ route('products.subcategories', $mainProduct->slug) }}">
                                    {{ $mainProduct->name }}
                                </a>

                                @if (isset($productDetail) && $productDetail->subSubCategory)
                                    <span>&gt;</span>
                                    <span class="current">{{ $productDetail->subSubCategory->name }}</span>
                                @elseif(isset($productDetail) && $productDetail->subCategory)
                                    <span>&gt;</span>
                                    <span class="current">{{ $productDetail->subCategory->name }}</span>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    @endif


    <section class="text-content-section pb-90">
        <div class="container pl-lg-5 pr-lg-5">

            @if ($productDetail)
                <div class="row">
                    <div class="col-12">

                        <h4>{{ $productDetail->name }}</h4>
                        <p class="text__block-desc">
                            {!! $productDetail->description !!}
                        </p>

                        {{-- Accordion --}}
                        <div id="accordion" class="mb-60">
                            @php
                                $lastIndex = null;
                                for ($j = 1; $j <= 6; $j++) {
                                    if (!empty($productDetail->{'accordion_heading' . $j})) {
                                        $lastIndex = $j;
                                    }
                                }
                            @endphp

                            @for ($i = 1; $i <= 6; $i++)
                                @php
                                    $heading = 'accordion_heading' . $i;
                                    $desc = 'accordion_description' . $i;
                                @endphp

                                @if (!empty($productDetail->$heading))
                                    <div class="accordion-item">
                                        <div class="accordion__item-header" data-toggle="collapse"
                                            data-target="#collapse{{ $i }}">
                                            <a class="accordion__item-title" href="#">
                                                {{ $productDetail->$heading }}
                                            </a>
                                        </div>

                                        <div id="collapse{{ $i }}"
                                            class="collapse {{ $i === $lastIndex ? 'show' : '' }}"
                                            data-parent="#accordion">
                                            <div class="accordion__item-body accordion__item-layout2">
                                                {!! $productDetail->$desc !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>

                    </div>
                </div>
            @else
                {{-- ✅ Message ONLY --}}
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="alert alert-warning mt-4">
                            ⚠️ Products are coming soon.
                            <br>
                            <a href="{{ route('products.index') }}" class="btn btn__primary mt-2">
                                Browse other products
                            </a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>



    {{-- 
    @if ($productDetail)
        <h1>{{ $productDetail->name }}</h1>
        <p>{!! $productDetail->description !!}</p>

        @for ($i = 1; $i <= 6; $i++)
            @php
                $heading = 'accordion_heading' . $i;
                $desc = 'accordion_description' . $i;
            @endphp

            @if (!empty($productDetail->$heading))
                <h3>{{ $productDetail->$heading }}</h3>
                <p>{!! $productDetail->$desc !!}</p>
            @endif
        @endfor
    @else
        <p>⚠️ Product details are not available.</p>
    @endif --}}

@endsection
