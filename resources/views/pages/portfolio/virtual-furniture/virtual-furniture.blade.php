@extends('pages.portfolio.layouts.entry')

@section('title', 'Furniture Renderings by Spotless')

@section('meta')
    <meta property="og:title" content="Virtual furniture">
    <meta property="og:description" content="">
    <meta property="og:url" content="{{url('/blog/project/virtual-furniture/')}}">
    <meta name="twitter:card" content="summary">
    <meta property="twitter:title" content="Virtual furniture">
    <meta property="twitter:description" content="">
    <meta name="author" content="Andrey Zlobin">
    <meta name="description" content="Detailed view of the image Virtual furniture by Spotless Agency">
    <link rel="canonical" href="{{url('/blog/project/virtual-furniture/')}}">
@endsection

@section('portfolio-content')
    <span class="tag">Furniture Renderings</span>
    <h1 class="title">Virtual furniture</h1>
    <div class="info">
        <ul class="info-list">
            <li>
                <p class="uppercase">
                    <span class="title">Date:</span>
                    February 2, 2017 </p>
            </li>
            <li>
                <p class="uppercase">
                    <span class="title">Skills:</span>
                    Furniture Renderings </p>
            </li>
        </ul>
    </div>
@endsection

@section('gallery-description', 'Furniture-catalog')
