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

Route::get('/', function () {
    return view('welcome');
});
    
    Route::get('/index', function () {
        return view('index');
});
    
Route::get('/layout', function () {
      return view('layout');
});
Route::get('/firstvue', function() {
      return view('firstvue');
});
    Route::post('/firstvue','TelController@index');
    
Route::get('/error', function() {
     return view('errorvue');
    });
    Route::get('/winvue', function() {
        return view('winvue');
    });

    
Auth::routes();
Route::get('/test', 'Controller@index')->name('testRoute');
Route::get('/home', 'HomeController@index')->name('home');
