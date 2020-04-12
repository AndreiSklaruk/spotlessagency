<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entries \Illuminate\Support\Collection
 */
?>
@extends($blog->bladeView('layouts.blog'), ['metaTags' => $blog])

@includeFirst($blog->bladeViews('custom.index-page'))

@section('title', $blog->getPageTitle())

@push('head')
  <link rel="canonical" href="{{ $blog->urlToIndex() }}" />
  @includeFirst($blog->bladeViews('feed.metaLink'))
@endpush

@section('blog')
  @includeFirst($blog->bladeViews('blog.intro'))
  @if($entries->count())
    <div class="vc_row blog-posts-masonry norebro-masonry"
         style="position: relative; height: 1530.98px;"
         data-lazy-container="true"
         aria-label="{{ __($blog->transKey('titles.latest_entries')) }}">
      @each($blog->bladeView('entry.listItem'), $entries, 'entry')
    </div>
  @endif
@endsection
