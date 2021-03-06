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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'PanelController@index')->name('home');
    Route::get('/admin', 'PanelController@index')->name('userList');
    Route::get('/admin/user/add', 'PanelController@addUser')->name('userAdd');
    Route::post('/admin/user/save', 'PanelController@saveUser')->name('userSave');
    Route::get('/admin/user/enable/{id}', 'PanelController@enableUser');
    Route::get('/admin/user/disable/{id}', 'PanelController@disableUser');
});