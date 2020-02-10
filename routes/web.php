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
    return view('mainpage');
    //return view('welcome');
});

Route::get('avalon','AvalonController@create');
Route::get('avalon2','AvalonController@create2');
Route::post('store','AvalonController@store');
Route::post('store2','AvalonController@store2');
Route::post('download','AvalonController@download');