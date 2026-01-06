@extends('layouts.app')

@section('title', 'About Us | Arabian Gratings')
@section('meta_description', 'Arabian Gratings – Your partner for safe and productive workplaces')
@section('meta_keywords', 'about arabian gratings, industrial gratings, frp gratings, steel gratings')

@section('content')

<!-- ========================
   Page Title
=========================== -->
<section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
    <div class="bg-img">
        <img src="{{ asset('assets/images/sliders/about.jpg') }}" alt="background">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="pagetitle__heading mb-0">
                    Your Partner for Safe and Productive Workplaces
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
    About Content
=========================== -->
<section id="about" class="pt-4 pb-5">
    <div class="container">
        <div class="row p-0 m-0">

            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h3>Arabian Gratings</h3>
                </div>
            </div>

            <div class="col-12 pb-5">
                <p class="text__block-desc">
                    Arabian Gratings is your premier supplier of high-quality FRP, Steel, and
                    Stainless Steel industrial products in Saudi Arabia. With a strong commitment
                    to excellence, we provide a comprehensive range of essential components,
                    including Grating Panels, Stair Treads, Handrail Systems, Cage Ladders, and
                    Panel Clips.
                </p>

                <p class="text__block-desc">
                    Our foundation is built on extensive industry experience, unwavering dedication
                    to quality, and a team of seasoned professionals. We ensure that every product
                    we supply meets rigorous quality standards and exhibits robustness, load-bearing
                    capacity, and stress resistance. Trusted across various industries, we are known
                    for delivering on time and at competitive prices.
                </p>
            </div>

            <!-- Vision -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-about">
                    <div class="single-about-icon">
                        <i class="fa fa-codepen"></i>
                    </div>
                    <div class="single-about-text">
                        <h4>Our Vision</h4>
                        <p class="text__block-desc">
                            To be the premier supplier of quality gratings, driven by a
                            customer-focused approach.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-about">
                    <div class="single-about-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="single-about-text">
                        <h4>Our Mission</h4>
                        <p class="text__block-desc">
                            Consistently exceeding customer expectations through quality,
                            innovation, and dedicated service.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-about">
                    <div class="single-about-icon">
                        <i class="fa fa-external-link"></i>
                    </div>
                    <div class="single-about-text">
                        <h4>Core Values</h4>
                        <p class="text__block-desc">
                            Integrity, Quality, Customer Focus, Innovation, Sustainability,
                            and Teamwork.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
