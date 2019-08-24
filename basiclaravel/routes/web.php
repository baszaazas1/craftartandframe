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
123
*/
Route::get('/create',function(){
    return view('user.index');
});

Route::resource('user','UsersController');

Route::get('/search','SearchController@search')->name('user.search');
Route::get('/action','SearchController@action')->name('user.action');

//upload image
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@upload');