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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@index');
Route::get('/maintain', 'MaintainController@index');
Route::get('/search/{token}','SearchController@fueltype');
Route::get('/size/{fueltype}/{token}','SearchController@size');
Route::post('/search-budget','SearchController@budget');
Route::post('/summary','SearchController@summary');
Route::post('/submit_reg','MaintainController@reg');
