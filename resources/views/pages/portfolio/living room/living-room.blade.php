@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual Staging Living Room')

@section('meta')
    <meta property="og:title" content="Living Room">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/living-room/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Living Room">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image New Living Room by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/living-room/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">Virtual Staging</span>
    <h1 class="title">Living Room</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>November 9, 2017
                </p>
            </li>
            <li>
                <p class="uppercase">
                    <span class="title">Skills:</span> Virtual Staging
                </p>
            </li>
        </ul>
    </div>
@endsection

@section('gallery-description', 'Catalog_renderings_6')