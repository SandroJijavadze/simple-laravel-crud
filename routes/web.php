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

Auth::routes();
Route::get('/', 'ContentController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('biletebi', 'BiletebiController@index');
Route::resource('content', 'ContentController');

