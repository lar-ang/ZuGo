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
    Route::get('/advertise', 'Controller@getAdvertises');
    Route::post('/saveAdvertise', 'Controller@saveAdvertise');
    Route::get('/removeAdvertise', 'Controller@removeAdvertise');

    Route::get('/user', 'Controller@getUsers');
    Route::post('/saveUser', 'Controller@saveUser');
    Route::get('/removeUser', 'Controller@removeUser');
});
