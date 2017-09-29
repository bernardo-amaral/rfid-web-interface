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

Route::get('/', 'DefaultController@index')->name('home');

Route::get('/adminfree', 'PanelController@index');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'PanelController@index');
});