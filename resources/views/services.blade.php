@extends('layouts.app')

@section('title', 'Services | Arabian Gratings')
@section('meta_description', 'Fabrication and Structural services by Arabian Gratings')
@section('meta_keywords', 'fabrication services, structural services, arabian gratings')

@section('content')

<!-- ========================
   Page Title
=========================== -->
<section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
    <div class="bg-img">
        <img src="{{ asset('assets/images/sliders/banner-3.webp') }}" alt="background">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="pagetitle__heading mb-0">Services</h1>
            </div>
        </div>
    </div>
</section>

<!-- ===========================
  Portfolio / Services
============================= -->
<section class="portfolio-standard">
    <div class="container">

        <!-- Filter -->
        <div class="row">
            <div class="col-12">
                <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
                    <li><a class="filter" href="#" data-filter=".filter-fabrication">Fabrication</a></li>
                    <li><a class="filter" href="#" data-filter=".filter-structural">Structural</a></li>
                </ul>
            </div>
        </div>

        <!-- Items -->
        <div id="filtered-items-wrap" class="row">

            {{-- Fabrication Images --}}
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-fabrication">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="{{ asset('assets/images/portfolio/grid/structural/structural-1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-fabrication">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="{{ asset('assets/images/portfolio/grid/structural/structural-2.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-fabrication">
                <div class="portfolio-item">
                    <div class="portfolio__img">
                        <img src="{{ asset('assets/images/portfolio/grid/structural/structural-3.png') }}" alt="">
                    </div>
                </div>
            </div>

            {{-- Fabrication Content --}}
            <div class="col-sm-12 col-md-6 col-lg-6 mix filter-fabrication">
                <div class="about-layout2">
                    <h5 class="text-md-center">Fabrication</h5>
                    <ul class="list-items list-unstyled mb-40">
                        <li>Customized Fabrication</li>
                        <li>Park Light Poles</li>
                        <li>Signage Board</li>
                        <li>Platforms</li>
                        <li>Frames</li>
                        <li>Structures</li>
                        <li>Ladders</li>
                        <li>Handrails</li>
                    </ul>
                </div>
            </div>

            {{-- Services --}}
            <div class="col-sm-12 col-md-6 col-lg-4 mix filter-fabrication">
                <div>
                    <h5>Service</h5>
                    <ul class="list-items list-unstyled">
                        <li>Galvanizing</li>
                        <li>Sandblasting</li>
                        <li>Powder Coating</li>
                        <li>Corrosion Resistance Painting</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
