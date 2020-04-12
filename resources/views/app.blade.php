@extends('index')

@section('main-content')

    @yield('contentTitle')

    <div class="page-container @yield('page-containerClasses')">
        <div id="primary" class="content-area">
            <div class="page-content ">
                <main id="main" class="site-main">
                    <article id="post-13189" class="post-13189 page type-page status-publish hentry">
                        <div class="entry-content">
                            @yield('content')
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->
                </main><!-- #main -->
            </div>
        </div><!-- #primary -->
    </div><!--.page-container-->
@endsection
