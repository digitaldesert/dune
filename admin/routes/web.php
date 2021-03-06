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

Route::get('add','FeedController@create');
Route::post('add','FeedController@store');
Route::get('feeds','FeedController@index');
Route::get('edit/{id}','FeedController@edit');
Route::post('edit/{id}','FeedController@update');
Route::delete('{id}','FeedController@destroy');
