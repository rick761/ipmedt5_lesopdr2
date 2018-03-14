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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');;
Route::get('/vak/{name?}', 'VakController@index');
Route::get('/admin', 'AdminPanelController@index')->name('admin');;
Route::post('/search', 'VakController@search')->name('search');
Route::post('/saveCijfers','AdminPanelController@saveCijfers')->name('saveCijfers');


