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

Route::get('/', function () {
    return view('/home/home');
});

Route::get('/main', function () {
    return view('app');
});

Route::get('/flor-plan-visualization', function () {
    return view('/floor-plan/floor-plan');
});

Route::get('/3d-renderings', function () {
    return view('/3d-rendering/3d-rendering');
});

Route::get('/3d-renderings/architectural-visualization', function () {
    return view('/3d-rendering/architectural-visualization');
});

