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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome/{name}','HelloController@showHello');

Route::get('/show','HelloController@index');

Route::get('/create',function(){
    return view('product.home');
});