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
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::get('/daftar','AuthController@daftar');
Route::post('/daftar/create','AuthController@create');

Route::get('/','HomeController@index' );
Route::get('/ikan','IkanController@index')->middleware(['auth']);
Route::get('/ikan/create','IkanController@create')->middleware(['auth']);
Route::post('/ikan/post','IkanController@post')->middleware(['auth']);
Route::get('/ikan/{id}/edit','IkanController@edit')->middleware(['auth']);
Route::post('/ikan/{id}/update','IkanController@update')->middleware(['auth']);
Route::get('/ikan/{id}/delete','IkanController@delete')->middleware(['auth']);
Route::get('/ikan/{id}/detail','HomeController@detail');