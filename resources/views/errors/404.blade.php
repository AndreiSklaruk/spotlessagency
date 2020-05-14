@extends('appWithFooter')

@push('bodyClasses', 'error404')

@section('mastheadClasses', 'dark-text header-2')

@section('contentTitle')
    <div class="header-title without-cap text-center">
        <div class="bg-image"></div>
        <div class="title-wrap">
            <div class="content">

                <div class="page-container">
                    <div class="wrap-container">

                        <h1 class="page-title">Page not found!</h1>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- .header-title -->
@endsection

@section('content')
    <section class="error-404 not-found">
        <div class="page-container">
            <div class="page-error">
                <div class="content-center">
                    <div class="wrap">
                        <div class="page-error-content">
                            <h1 class="title">404</h1>
                            <h3 class="text-center">Oops! That page can&#039;t be found</h3>
                        </div>
                        <form action="https://www.spotlessagency.com/" class="search" method="GET">
                            <input name="s" placeholder="Search" type="text">
                            <button class="btn btn-outline" type="submit">
                                <span class="icon ion-ios-search"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
@endsection
