<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
@extends('appWithFooter')

@includeFirst($blog->bladeViews('custom.all-pages'))

@section('meta', Bjuppa\MetaTagBag\MetaTagBag::make(config('blog.default_meta_tags'))->merge($metaTags ?? [])->merge(['charset' => 'utf-8']))

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
