<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
@extends('appWithFooter')

@includeFirst($blog->bladeViews('custom.all-pages'))

@section('mastheadClasses', 'dark-text header-2 no-transition')

@section('content')
  <main class="blog" itemscope itemtype="http://schema.org/Blog">
    @yield('blog')
  </main>
@endsection

@push('styles')
  @foreach($blog->stylesheetUrls() as $stylesheet)
    <link href="{{ url($stylesheet) }}" rel="stylesheet" type="text/css">
  @endforeach
@endpush
