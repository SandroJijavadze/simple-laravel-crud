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

Route::get('/', 'ContentController@index');
//Route::delete('/content/{id}','ContentController@destroy');
//Route::get('/edit/content/{id}/edit','ContentController@edit');
//Route:put('/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('content', 'ContentController');
