<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<ul class="recent-posts-list">
    @foreach($blog->latestEntries() as $entry)
        <li class="post-item clearfix ">
            <a href="{{ $blog->urlToEntry($entry) }}" class="more">
                <img width="150" height="150"
                     src="{{$entry->getImageUrl()}}"
                     class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                     srcset="{{$entry->getImageUrl()}} 150w,
                      {{$entry->getImageUrl()}} 200w"
                     sizes="(max-width: 150px) 100vw, 150px">
            </a>
            <div class="content-wrap">
                <h4 class="text-left font-main">
                    <a href="{{ $blog->urlToEntry($entry) }}">{{ $entry->getTitle() }} </a>
                </h4>
                <span class="date">25.03.2020</span>
                <span class="categories">Tips For Realtors</span>
                <br>
                <div class="subtitle">
                    <span class="comments">
                        <a href="{{ $blog->urlToEntry($entry) }}">No comments</a>
                    </span>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{--<ol class="blog-latest-entries-links" aria-label="{{ __($blog->transKey('titles.latest_entries')) }}">--}}
{{--    @foreach($blog->latestEntries() as $entry)--}}
{{--        <li>--}}
{{--            <a href="{{ $blog->urlToEntry($entry) }}"--}}
{{--               class="blog-entry-link blog-entry-title">{{ $entry->getTitle() }}</a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ol>--}}
