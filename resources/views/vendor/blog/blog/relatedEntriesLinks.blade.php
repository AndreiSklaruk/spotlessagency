<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $relatedEntry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
use App\Term;

?>

<div class="vc_row related-posts">
    @foreach(Term::getRelatedBlogEntryTo($entry->id) as $relatedEntry)
        <div class="vc_col-md-4 vc_col-xs-12">
            <div class="blog-grid grid-1">
                <header>
                    <img src="{{$relatedEntry->getImageUrl()}}" alt="{{ $relatedEntry->getTitle() }}">
                    <div class="tags">
{{--                        <a class="tag brand-bg-color brand-border-color" href="https://www.spotlessagency.com/blog/category/real-estate-tools/">Real Estate Tools</a>--}}
                    </div>
                </header>
                <div class="content">
                    <h3 class="title text-left">
                        <a rel="external" href="{{ $blog->urlToEntry($relatedEntry) }}/">{{ $relatedEntry->getTitle() }}</a>
                    </h3>
                </div>
                <footer>
                    <span class="author">{{ $relatedEntry->getAuthors()->first()->getName() }}</span>
                    <strong>-</strong>
                    <span class="data">
                        <time class="entry-date published updated" datetime="{{ $blog->convertToBlogTimezone($relatedEntry->getPublished())->toAtomString() }}">{{ $blog->convertToBlogTimezone($relatedEntry->getPublished())->format('d.m.Y') }}</time>
                    </span>
                </footer>
            </div>
        </div>
    @endforeach
</div>
