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
Route::get('/',function(){
    return view('welcome');
});

Route::get('/shop',function(){
    return view('shop');
});


Route::get('/create',function(){
    return view('user.index');
});

Route::resource('user','UsersController');

Route::resource('product','ProductController');

Route::get('/search','SearchController@search')->name('user.search');
Route::get('/action','SearchController@action')->name('user.action');

Route::get('/display','DisplayController@create');
Route::get('/index','DisplayController@index');
Route::get('/auto','AutoCompleteController@index');
Route::post('/auto','AutoCompleteController@show')->name('autocomplete.show');;

//upload image
Route::get('/upload','UploadController@index');
Route::post('/upload','UploadController@upload');