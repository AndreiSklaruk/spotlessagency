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

use Illuminate\Support\Facades\View;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home.home');
});

Route::get('/blog', 'Blog\CustomBlogHomePage@show')
    ->name(implode('.', [
        config('blog.route_name_prefix', 'blog'),
        array_keys(config('blog.blogs', ['main'=>'']))[0],
        'index'
    ]));

Route::get('/flor-plan-visualization', function () {
    return view('pages/floor-plan/floor-plan');
});

Route::get('/3d-renderings', function () {
    return view('pages/3d-rendering/3d-rendering');
});

Route::get('/pricing', function () {
    return view('pages/pricing/pricing');
});

Route::get('/about', function () {
    return view('pages/about/about');
});

Route::get('/contact', function () {
    return view('pages/contact/contact');
});

Route::get('/3d-renderings/architectural-visualization', function () {
    return view('pages/3d-rendering/architectural-visualization');
});

Route::get('/3d-renderings/furniture-renderings', function () {
    return view('pages/3d-rendering/furniture-rendering');
});

