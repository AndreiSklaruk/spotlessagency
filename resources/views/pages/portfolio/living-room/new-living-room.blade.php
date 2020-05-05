@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual Staging New Living Room')

@section('meta')
    <meta property="og:title" content="New Living Room">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/new-living-room/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="New Living Room">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Living Room by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/new-living-room/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">Virtual Staging</span>
    <h1 class="title">New Living Room</h1>
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

@section('portfolio-container')
    @include('pages.portfolio.partial.diff', [
        'imageUrlBefore' => '/images/portfolio/living-room/Living_room_before.jpg',
        'imageUrlAfter' => '/images/portfolio/living-room/Living_room_staged-2.jpg'
    ])
@endsection
