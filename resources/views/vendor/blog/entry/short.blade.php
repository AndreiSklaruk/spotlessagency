<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
use \Illuminate\Support\Str;
?>

<div
    class=" vc_col-lg-3 vc_col-md-3 vc_col-sm-6 vc_col-xs-12 grid-item norebro-card-wrapper blog-post-masonry masonry-block"
    data-aos="fade-up" data-aos-delay="0" data-aos-once="true" data-lazy-item="true">
    <div class="blog-grid grid-1 aos-init aos-animate" data-aos-once="&quot;true&quot;" data-aos="&quot;fade-up&quot;">

        <header>
            <a href="{{ $blog->urlToEntry($entry) }}/">
                <img src="{{ preg_replace('/(-scaled)?.jpg/', '-768x512.jpg', $entry->getImageUrl()) }}" alt="{{ $entry->getTitle() }}">
            </a>
{{--where?--}}
{{--            <div class="tags">--}}
{{--                <a class="tag brand-bg-color brand-border-color" href="https://www.spotlessagency.com/blog/category/real-estate-tools/">--}}
{{--                    Real Estate Tools--}}
{{--                </a>--}}
{{--            </div>--}}
        </header>

        <div class="content">
            <h3>
                <a href="{{ $blog->urlToEntry($entry) }}/">{{ $entry->getTitle() }}</a>
            </h3>
            <p>{{ Str::limit($entry->summary, 155) }}</p>
        </div>

        <footer>
            <span class="author">{{ $entry->getAuthors()->first()->getName() }}</span>
            <strong>—</strong>
            <span class="data">{{ $blog->convertToBlogTimezone($entry->getPublished())->format('d.m.Y') }}</span>
        </footer>

    </div>
    <div class="clear"></div>
</div>
