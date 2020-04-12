<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
{{--<article class="blog-entry-short" itemprop="blogPost" itemscope--}}
{{--         itemtype="http://schema.org/BlogPosting" @includeWhen($entry->getImageUrl(), $blog->bladeView('entry.partials.imageStyle'))>--}}
{{--    <header class="blog-entry-header">--}}
{{--        <h2 class="blog-entry-title" itemprop="headline"><a href="{{ $blog->urlToEntry($entry) }}"--}}
{{--                                                            class="blog-entry-link"--}}
{{--                                                            itemprop="url">{{ $entry->getTitle() }}</a></h2>--}}
{{--    </header>--}}
{{--    <div class="blog-entry-summary">--}}
{{--        {{ $entry->getSummary() }}--}}
{{--    </div>--}}
{{--    <footer class="blog-entry-footer">--}}
{{--        <small>--}}
{{--            <time datetime="{{ $blog->convertToBlogTimezone($entry->getPublished())->toAtomString() }}" lang="en"--}}
{{--                  dir="ltr" itemprop="datePublished">{{ $entry->getPublished()->diffForHumans() }}</time>--}}
{{--        </small>--}}
{{--        <a href="{{ $blog->urlToEntry($entry) }}" class="blog-read-more-link">--}}
{{--            <small>{{ __($blog->transKey('titles.read_entry')) }}<span>:</span></small>--}}
{{--            <small>{{ $entry->getTitle() }}</small>--}}
{{--        </a>--}}
{{--    </footer>--}}
{{--</article>--}}

<div
    class="vc_col-lg-3 vc_col-md-3 vc_col-sm-6 vc_col-xs-12 grid-item norebro-card-wrapper blog-post-masonry masonry-block aos-init aos-animate"
    data-aos-once="true" data-aos="fade-up" data-aos-delay="100" data-lazy-item="true"
    style="position: absolute; left: 294px; top: 0px;">
    <div class="blog-grid grid-1 aos-init aos-animate" data-aos-once="&quot;true&quot;" data-aos="&quot;fade-up&quot;">

        <header>
            <a href="{{ $blog->urlToEntry($entry) }}">
                <img src="{{$entry->getImageUrl()}}"
                     alt="{{ $entry->getTitle() }}">
            </a>
{{--where?--}}
            <div class="tags">
                <a class="tag brand-bg-color brand-border-color"
                   href="https://www.spotlessagency.com/blog/category/real-estate-tools/">
                    Real Estate Tools </a>
            </div>
        </header>

        <div class="content">
            <h3>
                <a href="https://www.spotlessagency.com/blog/top-12-secrets-of-the-real-estate-industry/">{{ $entry->getTitle() }}</a>
            </h3>
            <p>{{ $entry->getSummary() }}</p>
        </div>

        <footer>
            <span class="author">{{ $entry->getAuthors()->join('')}}</span>
            <strong>—</strong>
            <span class="data">{{ $blog->convertToBlogTimezone($entry->getPublished())->format('d.m.Y') }}</span>
        </footer>

    </div>
    <div class="clear"></div>
</div>
