<!-- =========================
        Header
=========================== -->
<header class="header header-transparent header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">

            {{-- LOGO --}}
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo/logo-white.png') }}" class="logo-light" alt="logo">
                <img src="{{ asset('assets/images/logo/logo.png') }}" class="logo-dark" alt="logo">
            </a>

            {{-- MOBILE TOGGLE --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation">
                <span class="menu-lines"><span></span></span>
            </button>

            {{-- NAVIGATION --}}
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav">

                    {{-- HOME --}}
                    <li class="nav__item">
                        <a href="{{ route('home') }}"
                            class="nav__item-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    {{-- PRODUCTS --}}
                    <li class="nav__item with-dropdown">
                        <a href="{{ route('products.index') }}" class="dropdown-toggle nav__item-link">
                            Products
                        </a>
                        <i class="fa fa-angle-down" data-toggle="dropdown"></i>

                        <ul class="dropdown-menu">
                            @php
                                $mainProducts = \App\Models\MainProduct::orderBy('id', 'asc')->get();
                            @endphp

                            @foreach ($mainProducts as $main)
                                <li class="nav__item">
                                    <a href="{{ route('products.subcategories', $main->slug) }}" class="nav__item-link">
                                        {{ $main->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    {{-- SERVICES --}}
                    <li class="nav__item with-dropdown">
                        <a href="{{ route('services') }}" class="dropdown-toggle nav__item-link">
                            Services
                        </a>
                        <i class="fa fa-angle-down" data-toggle="dropdown"></i>

                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{ route('services') }}?filter=fabrication" class="nav__item-link">
                                    Fabrication
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('services') }}?filter=structural" class="nav__item-link">
                                    Structural
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- ABOUT --}}
                    <li class="nav__item">
                        <a href="{{ route('about') }}"
                            class="nav__item-link {{ request()->routeIs('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>
                    {{-- Blog --}}
                    <li class="nav__item">
                        <a href="{{ route('blog.index') }}"
                            class="nav__item-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                            Blog
                        </a>
                    </li>

                    {{-- CONTACT --}}
                    <li class="nav__item">
                        <a href="{{ route('contact') }}"
                            class="nav__item-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            Contacts
                        </a>
                    </li>

                </ul>
            </div>

            <div class="header-right d-flex align-items-center">

                {{-- SEARCH ICON --}}
                <a href="javascript:void(0)" id="openSearch" class="header-search">
                    <i class="fa fa-search"></i>
                </a>

                {{-- CONTACT INFO --}}
                <div class="contact__number d-flex align-items-center">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:sales@arabiangratings.com">sales@arabiangratings.com</a>
                </div>

            </div>

        </div>
    </nav>
</header>
