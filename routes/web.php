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
//Public
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Super Admin
Route::get('/superadmin', 'SuperAdminController@index');
//Admin
Route::get('/admin', 'AdminController@index');
//User
Route::get('/user', 'UserController@index');
Route::get('/home', 'HomeController@index')->name('home');
