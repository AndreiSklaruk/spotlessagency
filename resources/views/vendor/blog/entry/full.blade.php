<?php
/**
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
    use App\Term;
?>

<div class="header-title without-cap text-center show">
    <div class="bg-image"></div>
    <div class="title-wrap">
        <div class="content">
            <div class="page-container">
                <div class="wrap-container">
                    <div class="tags no-transition">
                        @foreach(Term::getBlogEntryCategories($entry->id) as $term)
                            <a class="tag" href="{{ url('/blog/category/' . $term->slug) }}" rel="category tag">{{ $term->name }}</a>
                        @endforeach
                    </div>
                    <h1 class="page-title no-transition">{{ $entry->getTitle() }}</h1>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .header-title -->

<div class="page-container without-breadcrumbs">
    <div class="page-content with-right-sidebar">
        <div class="content-area" id="primary">
            <main class="site-main page-offset-bottom" id="main">
                <article class="post-13189 page type-page status-publish hentry" id="post-13189">
                    <div class="entry-content">
{{--                        @includeFirst($blog->bladeViews('entry.partials.header', $entry))--}}
                        @includeFirst($blog->bladeViews('entry.partials.content', $entry))
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
                @includeFirst($blog->bladeViews('entry.partials.relatedContent', $entry))
            </main><!-- #main -->
        </div>
    </div><!-- #primary -->
    <div class="page-sidebar sidebar-right">
        <aside id="secondary" class="widget-area">
            <section id="custom_html-3" class="widget_text widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                    <div class="sidebar-logo-wrap">
                        <img style="width: 100px" class="sidebar-logo" alt="spotlessagency logotype"
                             src="{{asset('images/svg/logoinsk.svg')}}">
                    </div>
                </div>
            </section>
            <section id="search-2" class="widget widget_search">
                <form role="search" class="search search-form" action="/" method="GET">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="text" class="search-field" name="s" placeholder="Search..." value="">
                    </label>
                    <button type="submit" class="search search-submit">
                        <span class="ion-ios-search-strong"></span>
                    </button>
                </form>
            </section>
            <section id="norebro_widget_recent_posts-1" class="widget widget_norebro_widget_recent_posts">
                @includeFirst($blog->bladeViews('blog.latestEntriesLinks'))
            </section>
            <section id="norebro_widget_subscribe-1" class="widget widget_norebro_widget_subscribe">
                <div class="subscribe-widget">
                    <form id="feedburner_subscribe_5e933d7c1b60f" action="https://feedburner.google.com/fb/a/mailverify"
                          method="post" target="popupwindow"
                          onsubmit="window.open( 'https://feedburner.google.com/fb/a/mailverify?uri=', 'popupwindow', 'scrollbars=yes,width=550,height=520' );return true">
                        <div class="subscribe fullwidth text-left">
                            <input type="text" placeholder="Enter your email" name="email" id="subsmail_5e933d7c1b6a1">
                            <button class="btn btn-outline">Subscribe</button>
                        </div>
                        <div class="text-left"></div>
                        <input type="hidden" value="" name="uri">
                        <input type="hidden" name="loc" value="en_US">
                    </form>
                </div>
            </section>
            <section id="categories-5" class="widget widget_categories"><h3 class="title widget-title">Categoriess</h3>
                @includeFirst($blog->bladeViews('blog.categoryList'))
            </section>
            <section id="norebro_widget_socialbar_subscribe-3" class="widget widget_norebro_widget_socialbar_subscribe">
                <h3 class="title widget-title">Follow Us</h3>
                <div class="socialbar small new-tab-links">
                    <a href="https://www.facebook.com/spotlessagency/" target="_blank" class="social outline rounded">
                        <span class="icon fa fa-facebook"></span>
                    </a>

                    <a href="https://twitter.com/Spotless_agency" target="_blank" class="social outline rounded">
                        <span class="icon fa fa-twitter"></span>
                    </a>


                    <a href="https://www.instagram.com/spotlessagency/" target="_blank" class="social outline rounded">
                        <span class="icon fa fa-instagram"></span>
                    </a>

                    <a href="https://www.linkedin.com/company/spotlessagency/" target="_blank"
                       class="social outline rounded">
                        <span class="icon fa fa-linkedin"></span>
                    </a>


                </div>
            </section>
        </aside>
    </div>
</div><!--.page-container-->
<div class="page-container  without-breadcrumbs"></div>
