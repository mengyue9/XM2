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

//模板继承
Route::resource("/admin","Admin\AdminController");
//后台的会员模块
Route::resource("/adminuser","Admin\UserController");

Route::get("/a","Admin\UserController@a");

Route::get("/b","Admin\UserController@b");

Route::get("/c","Admin\UserController@c");

Route::get("/pays","Home\PayController@pays");

Route::get("/returnurl","Home\payController@returnurl");