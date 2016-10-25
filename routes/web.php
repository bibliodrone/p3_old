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


Route::get('/', function () 
{
    return View::make('welcome');
});

/*
Route::get('/loremipsum', 'p3Controller@loremipsum')->name('p3.loremipsum'); {
    return view('welcome');
};

*/

/*Route::get('/loremipsum', 'p3Controller@loremipsum')->name('p3.li');*/
Route::any('/loremIpsum', function() {
	return View::make('loremIpsum');
});

/*Route::get'/username', 'p3Controller@username')->name('p3.username');*/
Route::any('/usernames', function() {
	return View::make('usernames');
});
 