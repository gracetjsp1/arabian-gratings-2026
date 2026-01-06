<!-- ============================
    Slider
============================== -->
<section class="slider slider-layout2">
    <div class="slick-carousel carousel-arrows-light m-slides-0"
         data-slick='{
            "slidesToShow": 1,
            "arrows": true,
            "dots": true,
            "speed": 700,
            "fade": true,
            "cssEase": "linear",
            "autoplay": true,
            "autoplaySpeed": 8000
         }'>

        {{-- SLIDE 1 --}}
        <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="video-banner-1">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/images/sliders/web-banner.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="slide__content">
                            <h2 class="slide__title">
                                The Grating Experts <br> You Can Trust
                            </h2>
                            <p class="slide__desc">
                                Arabian Gratings is the number one supplier of top-quality FRP, Steel, and
                                Stainless Steel gratings for diverse industries including power, water,
                                mining, construction, oil, and gas.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="info__slider-wrap d-flex justify-content-center mt-30">
                            <div class="info__slider">
                                <div class="info__slider-item text-center">
                                    <a href="#">
                                        <div class="info__slider-icon d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/icons/gratings.png') }}" alt="Gratings">
                                        </div>
                                        <h3 class="info__slider-title">Gratings</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SLIDE 2 --}}
        <div class="slide-item align-v-h bg-overlay">
            <div class="video-banner-1">
                <img src="{{ asset('assets/images/sliders/banner-3.webp') }}"
                     class="video-banner-img"
                     alt="Industrial Gratings">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="slide__content">
                            <h2 class="slide__title">
                                Redefining Excellence in Industrial Gratings
                            </h2>
                            <p class="slide__desc">
                                Arabian Gratings is a leading supplier of high-quality FRP, steel, and
                                stainless steel gratings for oil & gas, power, water, mining, and construction.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="info__slider-wrap d-flex justify-content-center mt-30">
                            <div class="info__slider">
                                <div class="info__slider-item text-center">
                                    <a href="#">
                                        <div class="info__slider-icon d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/icons/fabrication.png') }}" alt="Fabrication">
                                        </div>
                                        <h3 class="info__slider-title">Fabrication</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SLIDE 3 --}}
        <div class="slide-item align-v-h bg-overlay">
            <div class="video-banner-1">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/images/sliders/web-banner-3.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="slide__content">
                            <h2 class="slide__title">
                                Reliable Source for Industrial Grating Solutions
                            </h2>
                            <p class="slide__desc">
                                Arabian Gratings supplies premium FRP, steel, and stainless steel gratings
                                with durability, efficiency, and customization.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="info__slider-wrap d-flex justify-content-center mt-30">
                            <div class="info__slider">
                                <div class="info__slider-item text-center">
                                    <a href="#">
                                        <div class="info__slider-icon d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/icons/structural.png') }}" alt="Structural">
                                        </div>
                                        <h3 class="info__slider-title">Structural</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- SLIDE 3 --}}
        <div class="slide-item align-v-h bg-overlay">
            <div class="video-banner-1">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/images/sliders/web-banner-4.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="slide__content">
                            <h2 class="slide__title">
                                Reliable Laser Cutting for Industrial Applications
                            </h2>
                            <p class="slide__desc">
                                Arabian Gratings offers laser cutting solutions designed to meet strict industrial standards, delivering consistent accuracy, smooth edges, and reliable performance across diverse sectors.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="info__slider-wrap d-flex justify-content-center mt-30">
                            <div class="info__slider">
                                <div class="info__slider-item text-center">
                                    <a href="#">
                                        <div class="info__slider-icon d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/icons/laser-cutting.png') }}" alt="Structural">
                                        </div>
                                        <h3 class="info__slider-title">Laser Cutting</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
