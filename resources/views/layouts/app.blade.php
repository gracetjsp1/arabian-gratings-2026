<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO TITLE --}}
    <title>
        @yield('title', config('app.name') . ' | Industrial Gratings Manufacturer')
    </title>

    {{-- SEO META --}}
    <meta name="description" content="@yield('meta_description', 'Arabian Gratings is a leading manufacturer and supplier of FRP, Steel, and Stainless Steel industrial grating solutions.')">

    <meta name="keywords" content="@yield('meta_keywords', 'industrial gratings, FRP gratings, steel gratings, stainless steel gratings')">

    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>

<body>

    <div class="wrapper">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        <!-- SEARCH OVERLAY -->
        <!-- SEARCH OVERLAY -->

        <!-- SEARCH POPUP -->
        <div id="searchPopup">
            <div class="search-popup-box">
                <span id="closeSearch">&times;</span>

                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="q" placeholder="Search products..." autofocus required>

                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>
