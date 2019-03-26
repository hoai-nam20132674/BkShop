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

Route::get('/home', 'HomeController@index');
Route::get('/admin',['as'=>'admin','uses'=>'Auth\LoginController@getLogin']);
Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@login']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);
Route::post('/postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);
Route::group(['prefix'=>'auth','middleware'=>'auth'], function(){
	Route::get('trang-chu',['as'=>'authIndex','uses'=>'Auth\AdminController@index']);
	Route::get('them-san-pham',['as'=>'addProduct','uses'=>'Auth\AdminController@addProduct']);

});
