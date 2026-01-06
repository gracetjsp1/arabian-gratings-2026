<!-- ===========================
    Features Layout 1
============================= -->
<section class="features-layout1 bg-gray pb-0">
    <div class="container col-padding-0">

        {{-- SECTION HEADING --}}
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-50">
                    <span class="heading__subtitle">
                        Quality Products, On Time, Every Time
                    </span>
                    <h2 class="heading__title">
                        High Quality Construction Solutions
                    </h2>
                </div>
            </div>
        </div>

        {{-- FEATURES --}}
        <div class="row features-wrapper">

            {{-- FEATURE 1 --}}
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                    <div class="feature__img">
                        <a href="{{ route('products.index') }}">
                            <img src="{{ asset('assets/images/features/gratings.webp') }}"
                                 alt="Gratings"
                                 class="img-fluid">
                        </a>
                    </div>

                    <div class="feature__content">
                        <a href="{{ route('products.index') }}">
                            <h4 class="feature__title">Gratings</h4>
                        </a>

                        <p class="feature__desc">
                            <a href="{{ route('products.index') }}">
                                Delivers high-quality, precision-engineered grating solutions
                                designed to meet diverse industrial requirements with durability
                                and functionality at their core.
                            </a>
                        </p>

                        <ul class="list-items list-items-layout2 list-unstyled mb-30">
                            <li>SS/GI Grating Clamps</li>
                            <li>Step Iron</li>
                            <li>Stud Products</li>
                        </ul>

                        <a href="{{ route('products.index') }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- FEATURE 2 --}}
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                    <div class="feature__img">
                        <a href="{{ route('services', ['filter' => 'fabrication']) }}">
                            <img src="{{ asset('assets/images/features/fabrication.jpg') }}"
                                 alt="Fabrication"
                                 class="img-fluid">
                        </a>
                    </div>

                    <div class="feature__content">
                        <a href="{{ route('services', ['filter' => 'fabrication']) }}">
                            <h4 class="feature__title">Fabrication</h4>
                        </a>

                        <p class="feature__desc">
                            <a href="{{ route('services', ['filter' => 'fabrication']) }}">
                                Expert fabrication services tailored to create high-quality,
                                customized components and assemblies.
                            </a>
                        </p>

                        <ul class="list-items list-items-layout2 list-unstyled mb-30">
                            <li>Platforms</li>
                            <li>Frames</li>
                            <li>Structures</li>
                        </ul>

                        <a href="{{ route('services', ['filter' => 'fabrication']) }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- FEATURE 3 --}}
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                    <div class="feature__img">
                        <a href="{{ route('services', ['filter' => 'structural']) }}">
                            <img src="{{ asset('assets/images/features/structural.jpg') }}"
                                 alt="Structural"
                                 class="img-fluid">
                        </a>
                    </div>

                    <div class="feature__content">
                        <a href="{{ route('services', ['filter' => 'structural']) }}">
                            <h4 class="feature__title">Structural</h4>
                        </a>

                        <p class="feature__desc">
                            <a href="{{ route('services', ['filter' => 'structural']) }}">
                                Providing robust and reliable structural solutions
                                ensuring durability and safety.
                            </a>
                        </p>

                        <ul class="list-items list-items-layout2 list-unstyled mb-30">
                            <li>Warehouse</li>
                            <li>Logistic Hub</li>
                            <li>Distribution Center</li>
                        </ul>

                        <a href="{{ route('services', ['filter' => 'structural']) }}" class="btn btn__secondary">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
