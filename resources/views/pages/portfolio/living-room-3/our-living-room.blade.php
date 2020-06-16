@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual Staging Our Living Room')

@section('meta')
    <meta property="og:title" content="Our Living Room">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/living-room-3')}}/">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Our Living Room">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Living Roo">
    <link rel="canonical" href="{{url('/blog/project/living-room-3')}}/">
@endsection

@section('portfolio-content')
    <span class="tag">Virtual Staging</span>
    <h1 class="title">Our Living Room</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>November 9, 2017
                </p>
            </li>
            <li>
                <p class="uppercase">
                    <span class="title">Skills:</span>Virtual Staging
                </p>
            </li>
        </ul>
    </div>
@endsection

@section('portfolio-container')
    @include('pages.portfolio.partial.diff', [
        'imageUrlBefore' => '/images/portfolio/living-room-3/CabriniLivingRoom.jpg',
        'imageUrlAfter' => '/images/portfolio/living-room-3/Cindy_Living_staged.jpg'
    ])
@endsection
