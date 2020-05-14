@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual Staging New Kitchen')

@section('meta')
    <meta property="og:title" content="New Kitchen">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/stylish-loft-kitchen/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="New Kitchen">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image New Kitchen">
    <link rel="canonical" href="{{url('/blog/project/stylish-loft-kitchen/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">Virtual Staging</span>
    <h1 class="title">Dining Room</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>MARCH 19, 2017
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
        'imageUrlBefore' => '/images/portfolio/stylish-loft-kitchen/Dining_room_after.jpg',
        'imageUrlAfter' => '/images/portfolio/stylish-loft-kitchen/Paige_200E_89th_Living_Dining_room_1_staged_AN.jpg'
    ])
@endsection

