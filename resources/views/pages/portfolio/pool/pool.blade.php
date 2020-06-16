@extends('pages.portfolio.layouts.entry')

@section('title', 'Visualization Pool')

@section('meta')
    <meta property="og:title" content="Pool">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/pool')}}/">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Pool">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Pool by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/pool')}}/">
@endsection

@section('portfolio-content')
    <span class="tag">Floor Plan Visualization</span>
    <h1 class="title">Visualization Pool</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>November 9, 2017
                </p>
            </li>
            <li>
                <p class="uppercase">
                    <span class="title">Skills:</span>Floor Plan Visualization
                </p>
            </li>
        </ul>
    </div>
@endsection

@section('gallery-description', 'pool_3d_visualization')
