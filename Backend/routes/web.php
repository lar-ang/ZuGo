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
    return view('index');
});

Route::post('/login', [
  'uses'=> 'Controller@login'
]);

Route::group(['middleware' => 'guest'], function() {

    Route::post('/savedata', 'Controller@savedata');

    Route::get('/removedata', 'Controller@removedata');


});
Route::get('/data', 'Controller@getData');
