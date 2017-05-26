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


Route::get('/create','SiswaController@create');
Route::get('/show','SiswaController@index');
Route::get('/{id}/edit','SiswaController@edit');
Route::post('/create','SiswaController@store');
Route::post('/update','SiswaController@update');
Route::get('/{id}/delete','SiswaController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
