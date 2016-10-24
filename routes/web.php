<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('master');
});

/*
Route::post('/loremipsum', 'p3Controller@lmip')->name('p3.lmip') {
    return view('welcome');
});
*/

Route::get('/loremipsum', 'p3Controller@loremIpsum') ->name('p3.loremipsum');

Route::get('/username', 'p3Controller@username') ->name('p3.username');
