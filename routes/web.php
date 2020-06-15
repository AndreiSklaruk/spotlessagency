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

Route::post('/send-feedback', 'FeedbackController@sendFeedback');

Route::view('/', 'home.home')->name('menu.home');

Route::view('/virtual-staging-works', 'pages.portfolio.portfolio')->name('menu.portfolio');

Route::view('/floor-plan-visualization', 'pages.floor-plan.floor-plan')->name('menu.floor-plan');

Route::view('/pricing', 'pages.pricing.pricing')->name('menu.pricing');

Route::view('/about', 'pages.about.about')->name('menu.about');

Route::view('/contact', 'pages.contact.contact')->name('menu.contact');

Route::prefix('3d-renderings')->group(function () {

    Route::view('/', 'pages.3d-rendering.3d-rendering')->name('menu.3d-rendering');

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
    Route::get('/category/{slug}', 'Blog\CategoryController@show')->name('blog.main.category');

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
        Route::get('/bedroom/', function () {
            return view('pages.portfolio.bedroom.bedroom')
                ->with('backgroundImageUrl', asset('images/portfolio/Spotlessagency_bedroom_staged_01-1920x1280-1.jpg'))
                ->with('fullImageUrl', asset(''));
        });
        Route::get('/house/', function () {
            return view('pages.portfolio.house.country-house')
                ->with('backgroundImageUrl', asset('images/portfolio/001-1024x683-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/country-house/001.jpg'));
        });
        Route::get('/kitchen/', function () {
            return view('pages.portfolio.kitchen.kitchen')
                ->with('backgroundImageUrl', asset('images/portfolio/Kitchen-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/kitchen/Kitchen_staged-1.jpg'));
        });
        Route::get('/living-room-2/', function () {
            return view('pages.portfolio.living-room-2.living-room')
                ->with('backgroundImageUrl', asset('images/portfolio/Amanda_Living_1_staged_corrected_1-1920x1279-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/living-room/Amanda_Living_2_staged_corrected_1.jpg'));
        });
        Route::get('/kitchen-2/', function () {
            return view('pages.portfolio.kitchen-2.new-kitchen')
                ->with('backgroundImageUrl', asset('images/portfolio/Kitchen_staged-1920x1258-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/new-kitchen/Kitchen_staged.jpg'));
        });
        Route::get('/living-room/', function () {
            return view('pages.portfolio.living-room.new-living-room')
                ->with('backgroundImageUrl', asset('images/portfolio/Living_room_staged-412.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/new-living-room/Living_room_staged-2.jpg'));
        });
        Route::get('/office/', function () {
            return view('pages.portfolio.office.office')
                ->with('backgroundImageUrl', asset('images/portfolio/001_v2-1024x807-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/office/001_v2.jpg'));
        });
        Route::get('/living-room-3/', function () {
            return view('pages.portfolio.living-room-3.our-living-room')
                ->with('backgroundImageUrl', asset('images/portfolio/Cindy_Living_staged-1920x1283-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/our-living-room/Cindy_Living_staged.jpg'));
        });
        Route::get('/pool/', function () {
            return view('pages.portfolio.pool.pool')
                ->with('backgroundImageUrl', asset('images/portfolio/pool_001p2-1024x683-1.jpg'))
                ->with('fullImageUrl', asset('images/portfolio/pool/pool_001p2.jpg'));
        });
        Route::get('/stylish-loft-kitchen/', function () {
            return view('pages.portfolio.stylish-loft-kitchen.stylish-loft-kitchen')
                ->with('backgroundImageUrl', asset('images/portfolio/stylish-loft-kitchen/Paige_200E_89th_Living_Dining_room_1_staged_AN.jpg'))
                ->with('fullImageUrl', asset(''));
        });
    });
});


