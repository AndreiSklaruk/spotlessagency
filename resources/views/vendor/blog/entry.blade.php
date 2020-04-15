<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
@extends($blog->bladeView('layouts.blogFullContent'), ['metaTags' => $blog->getDefaultMetaTags()->merge($entry)])

@includeFirst($blog->bladeViews('custom.entry-page'))

@section('title', $entry->getPageTitle($blog->getEntryPageTitleSuffix()))

@section('style-inline-css')
@endsection

@push('head')
  <link rel="canonical" href="{{ $blog->urlToEntry($entry) }}" />
  @includeFirst($blog->bladeViews('feed.metaLink'))
@endpush

@section('bodyClasses', 'post-template-default single single-post postid-15564 single-format-standard')
@section('blog')
  @includeFirst($blog->bladeViews('entry.full', $entry))
@endsection
