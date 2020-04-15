<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
@extends('index')

{{--@extends($blog->bladeView('layouts.html'))--}}

@includeFirst($blog->bladeViews('custom.all-pages'))

@section('mastheadClasses', 'dark-text header-2 no-transition')


@section('base-content')
    @yield('blog')
@endsection

@push('styles')
  @foreach($blog->stylesheetUrls() as $stylesheet)
    <link href="{{ url($stylesheet) }}" rel="stylesheet" type="text/css">
  @endforeach
@endpush

@section('footer-content')
    @include('partials.footer')
@endsection
