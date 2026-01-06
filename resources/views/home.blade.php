@extends('layouts.app')

@section('title', 'Arabian Gratings | Industrial Gratings Manufacturer')
@section('meta_description', 'Arabian Gratings is a leading manufacturer of industrial gratings.')
@section('meta_keywords', 'FRP gratings, steel gratings, industrial gratings')

@section('content')

@include('home.slider')
@include('home.about')
 @include('home.features')
@include('home.banner')
@include('home.clients')

@endsection



{{-- @extends('app')

@section('title', 'Home - Arabian Gratings')

@section('content')
<h1>Welcome to Arabian Gratings</h1>
<p>We offer high-quality gratings and related products.</p>

<h2>Our Products</h2>
<ul>
    @foreach($mainProducts as $main)
        <li><a href="{{ route('products.subcategories', $main->slug) }}">{{ $main->name }}</a></li>
    @endforeach
</ul>
@endsection --}}
