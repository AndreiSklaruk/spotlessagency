<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>

<div class="vc_row related-posts">
    @foreach($blog->latestEntries() as $entry)
        <div class="vc_col-md-4 vc_col-xs-12">
            <div class="blog-grid grid-1">
                <header>
                    <img src="{{$entry->getImageUrl()}}" alt="{{ $entry->getTitle() }}">
                    <div class="tags">
                        <a class="tag brand-bg-color brand-border-color" href="https://www.spotlessagency.com/blog/category/real-estate-tools/">Real Estate Tools</a>
                    </div>
                </header>
                <div class="content">
                    <h3 class="title text-left">
                        <a rel="external" href="{{ $blog->urlToEntry($entry) }}">{{ $entry->getTitle() }}</a>
                    </h3>
                </div>
                <footer>
                    <span class="author">{{ $entry->getAuthors()->join('')}}</span>
                    <strong>-</strong>
                    <span class="data">
                        <time class="entry-date published updated" datetime="{{ $blog->convertToBlogTimezone($entry->getPublished())->toAtomString() }}">{{ $blog->convertToBlogTimezone($entry->getPublished())->format('d.m.Y') }}</time>
                    </span>
                </footer>
            </div>
        </div>
    @endforeach
    <div class="vc_col-md-4 vc_col-xs-12">
        <div class="blog-grid grid-1">
            <header>
                <img src="https://www.spotlessagency.com/wp-content/uploads/2018/03/UsefulRealEstateTools.png" alt="10 Free And Incredibly Useful Real Estate Organization Tools">
                <div class="tags">
                    <a class="tag brand-bg-color brand-border-color" href="https://www.spotlessagency.com/blog/category/real-estate-tools/">
                        Real Estate Tools								</a>
                </div>
            </header>

            <div class="content">
                <h3 class="title text-left">
                    <a rel="external" href="https://www.spotlessagency.com/blog/10-free-and-useful-real-estate-organization-tools/">
                        10 Free And Incredibly Useful Real Estate Organization Tools								</a>
                </h3>
            </div>
            <footer>
                <span class="author">Andrey Zlobin</span> <strong>-</strong> <span class="data"><time class="entry-date published updated" datetime="2018-03-29T10:59:57-04:00">29.03.2018</time></span>						</footer>
        </div>
    </div>
    <div class="vc_col-md-4 vc_col-xs-12">
        <div class="blog-grid grid-1">
            <header>
                <img src="https://www.spotlessagency.com/wp-content/uploads/2018/03/realestatephoto.png" alt="Real Estate Photography – Should It Be Art?">
                <div class="tags">
                    <a class="tag brand-bg-color brand-border-color" href="https://www.spotlessagency.com/blog/category/real-estate-tools/">
                        Real Estate Tools								</a>
                </div>
            </header>

            <div class="content">
                <h3 class="title text-left">
                    <a rel="external" href="https://www.spotlessagency.com/blog/real-estate-photography-should-it-be-art/">
                        Real Estate Photography – Should It Be Art?								</a>
                </h3>
            </div>
            <footer>
                <span class="author">Andrey Zlobin</span> <strong>-</strong> <span class="data"><time class="entry-date published updated" datetime="2018-03-27T12:21:24-04:00">27.03.2018</time></span>						</footer>
        </div>
    </div>
</div>
