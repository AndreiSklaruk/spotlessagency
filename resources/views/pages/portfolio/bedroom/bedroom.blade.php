@extends('pages.portfolio.layouts.entry')

@section('title', 'Virtual Staging Bedroom')

@section('meta')
    <meta property="og:title" content="Bedroom">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/bedroom')}}/">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Bedroom">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Bedroom by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/bedroom')}}/">
@endsection

@section('portfolio-content')
    <span class="tag">Virtual Staging</span>
    <h1 class="title">Bedroom</h1>
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
        'imageUrlBefore' => '/images/portfolio/bedroom/Bedroom-before.png',
        'imageUrlAfter' => '/images/portfolio/bedroom/Spotlessagency_bedroom_staged_01.jpg'
    ])
@endsection
