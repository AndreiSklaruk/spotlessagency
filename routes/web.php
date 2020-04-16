<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/', 'home.home');

Route::view('/virtual-staging-works', 'pages.portfolio.portfolio');

Route::view('/flor-plan-visualization', 'pages.floor-plan.floor-plan');

Route::view('/pricing', 'pages.pricing.pricing');

Route::view('/about', 'pages.about.about');

Route::view('/contact', 'pages.contact.contact');

Route::prefix('3d-renderings')->group(function () {

    Route::view('/', 'pages.3d-rendering.3d-rendering');

    Route::view('/architectural-visualization', 'pages.3d-rendering.architectural-visualization');

    Route::view('/furniture-renderings', 'pages.3d-rendering.furniture-rendering');
});

Route::prefix('blog')->group(function () {
    Route::get('/', 'Blog\CustomBlogHomePage@show')
        ->name(implode('.', [
            config('blog.route_name_prefix', 'blog'),
            array_keys(config('blog.blogs', ['main'=>'']))[0],
            'index'
        ]));
    Route::prefix('project')->group(function () {
        Route::get('/virtually-furniture-2/', function () {
            return view('pages.portfolio.virtually-furniture-2.virtually-furniture-2')
                ->with('backgroundImageUrl', asset('images/portfolio/91cd9551333925.58ea85978a310-1024x1024-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/91cd9551333925.58ea85978a310-1024x1024-1.jpg'));
        });
        Route::get('/virtually-furniture/', function () {
            return view('pages.portfolio.virtually-furniture.virtually-furniture')
                ->with('backgroundImageUrl', asset('images/portfolio/Furniture-catalog-CGIs-762x1024-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/virtually-furniture/Furniture-catalog-CGIs.jpg'));
        });
        Route::get('/virtual-furniture/', function () {
            return view('pages.portfolio.virtual-furniture.virtual-furniture')
                ->with('backgroundImageUrl', asset('images/portfolio/virtual-furniture/Furniture-catalog.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/virtual-furniture/Furniture-catalog.jpg'));
        });
        Route::get('/building/', function () {
            return view('pages.portfolio.building.building')
                ->with('backgroundImageUrl', asset('images/portfolio/fin777777-935x1024.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/building/Catalog_renderings_6.jpg'));
        });
        Route::get('/modern-house/', function () {
            return view('pages.portfolio.modern-house.modern-house')
                ->with('backgroundImageUrl', asset('images/portfolio/Exterior-CGI-Australia-2-1024x559-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/modern-house/Exterior-CGI-Australia-2.jpg'));
        });
        Route::get('/exterior-building/', function () {
            return view('pages.portfolio.exterior-building.exterior-building')
                ->with('backgroundImageUrl', asset('images/portfolio/Exterior-shot-614x1024-1-614x1024.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/exterior-building/Exterior-shot.jpg'));
        });

    });
});


