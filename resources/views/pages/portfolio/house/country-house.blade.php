@extends('pages.portfolio.layouts.entry')

@section('title', 'Visualization Country House')

@section('meta')
    <meta property="og:title" content="Country House">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/house')}}/">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Country House">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Country House by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/house')}}/">
@endsection

@section('portfolio-content')
    <span class="tag">Architectural Visualization</span>
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
                    <span class="title">Skills:</span>Architectural Visualization
                </p>
            </li>
        </ul>
    </div>
@endsection

@section('gallery-description', 'country house')
