@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual staging Dining Room')

@section('meta')
    <meta property="og:title" content="Dining Room">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/dining-room/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Dining Room">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Dining Room">
    <link rel="canonical" href="{{url('/blog/project/dining-room/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">"Dining Room</span>
    <h1 class="title">Building</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>November 9, 2017
                </p>
            </li>
            <li>
                <p class="uppercase">
                    <span class="title">Skills:</span> Virtual staging
                </p>
            </li>
        </ul>
    </div>
@endsection

@section('gallery-description', 'Catalog_renderings_6')
