<div
    class=" vc_col-lg-4 vc_col-md-4 vc_col-sm-6 vc_col-xs-12 grid-item masonry-block blog-post-masonry"
    data-aos=&quot;fade-up&quot; data-aos-delay="0" data-aos-once="true"
    data-lazy-item="true">
    <div class="blog-grid grid-3" data-aos="fade-up" data-aos-once="true">
        <header data-norebro-bg-image="{{ $entry->getImageUrl() }}">
            <a href="{{ $blog->urlToEntry($entry) }}/"></a>
        </header>
        <div class="overlay brand-bg-color"></div>

        <div class="content">
            <div class="tags">
{{--                <a class="tag brand-bg-color brand-border-color"--}}
{{--                   href="https://www.spotlessagency.com/blog/category/spotless-agency/">--}}
{{--                    Spotless Agency </a>--}}
{{--                <a class="tag brand-bg-color brand-border-color"--}}
{{--                   href="https://www.spotlessagency.com/blog/category/tips-for-realtors/">--}}
{{--                    Tips For Realtors </a>--}}
            </div>

            <h3>
                <a href="{{ $blog->urlToEntry($entry) }}/">{{ $entry->getTitle() }}</a>
            </h3>
            <p>{{ Str::limit($entry->summary, 155) }}</p>
            <footer>
                <span class="author">{{ $entry->getAuthors()->first()->getName() }}</span>
                <strong>&mdash;</strong>
                <span class="data">{{ $blog->convertToBlogTimezone($entry->getPublished())->format('d.m.Y') }}</span>
                <span class="plus ion-ios-plus-empty brand-color"></span>
            </footer>
        </div>
    </div>
</div>
