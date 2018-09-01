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
    return 'hello workd';
});

Route::get('/user/useradd', function () {
    return view('user.useradd');
});

Route::get('/user/index', 'UserController@index');

Route::post('user/store', 'UserController@store');