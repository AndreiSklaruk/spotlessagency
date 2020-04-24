@extends('pages.portfolio.layouts.entry')

@section('title', 'Floor Plan Visualization Office')

@section('meta')
    <meta property="og:title" content="Office">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/office/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Office">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Office by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/office/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">Floor Plan Visualization</span>
    <h1 class="title">Office</h1>
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

@section('gallery-description', 'office_3d_visualization')
